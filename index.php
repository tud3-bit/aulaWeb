<?php
$linguagens = ['html' => 'HTML', 'php' => 'PHP', 'python' => 'Python'];
$lang = $_GET['lang'] ?? 'php';
if (!isset($linguagens[$lang])) $lang = 'php';
$questoes = require __DIR__ . "/questoes-$lang.php";

$niveis = ['facil' => 'Fácil', 'intermediario' => 'Intermediário', 'dificil' => 'Difícil'];
$filtro = $_GET['nivel'] ?? 'todos';
if (!isset($niveis[$filtro])) $filtro = 'todos';

$lista = array_values(array_filter($questoes, fn($q) => $filtro === 'todos' || $q['nivel'] === $filtro));

function normaliza(string $s): string {
    return mb_strtolower(preg_replace('/\s+/', '', $s));
}
function e(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$enviado = $_SERVER['REQUEST_METHOD'] === 'POST';
$respostas = $enviado ? ($_POST['r'] ?? []) : [];
$resultado = [];
$acertos = 0;

if ($enviado) {
    foreach ($lista as $q) {
        $dada = normaliza((string)($respostas[$q['id']] ?? ''));
        $ok = in_array($dada, array_map('normaliza', $q['respostas']), true);
        $resultado[$q['id']] = $ok;
        if ($ok) $acertos++;
    }
}
$total_questoes = count($lista);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lacunas de Lógica - Wizard</title>
<link rel="stylesheet" href="style.css">
<style>
  .wizard-passo { display: none; }
  .wizard-passo.ativo-passo { display: block; }
  .wizard-controles { display: flex; justify-content: space-between; margin-top: 20px; align-items: center; }
  .progresso-wizard { font-weight: bold; color: #555; }
</style>
</head>
<body>
<main>
  
  <!-- Inclusão do Cabeçalho Modularizado -->
  <?php include 'header.php'; ?>

  <?php if ($enviado): ?>
    <div class="placar <?= $acertos === $total_questoes ? 'perfeito' : '' ?>" role="status">
      Você acertou <strong><?= $acertos ?></strong> de <strong><?= $total_questoes ?></strong> questões.
    </div>
  <?php endif; ?>

  <?php if ($total_questoes === 0): ?>
    <p style="text-align:center; padding: 20px;">Nenhuma questão encontrada para este filtro.</p>
  <?php else: ?>
    <form method="post" action="?lang=<?= $lang ?>&nivel=<?= e($filtro) ?>" autocomplete="off" id="wizardForm">
      
      <?php foreach ($lista as $i => $q):
          $status = $enviado ? ($resultado[$q['id']] ? 'certo' : 'errado') : '';
          $valor = $respostas[$q['id']] ?? '';
          $partes = explode('___', $q['codigo'], 2);
          $passo_atual = $i + 1;
      ?>
      <section class="questao <?= $status ?> wizard-passo <?= $passo_atual === 1 ? 'ativo-passo' : '' ?>" data-passo="<?= $passo_atual ?>">
        <div class="topo">
          <h2>Questão <?= $passo_atual ?> de <?= $total_questoes ?>: <?= e($q['titulo']) ?></h2>
          <span class="selo <?= $q['nivel'] ?>"><?= $niveis[$q['nivel']] ?></span>
        </div>

        <pre><code><?= e($partes[0]) ?><input type="text" name="r[<?= $q['id'] ?>]" value="<?= e((string)$valor) ?>" aria-label="Lacuna da questão <?= $passo_atual ?>" size="6" spellcheck="false"><?= e($partes[1] ?? '') ?></code></pre>

        <?php if ($enviado): ?>
          <?php if ($resultado[$q['id']]): ?>
            <p class="msg certo">Acertou!</p>
          <?php else: ?>
            <p class="msg errado">Errou. Resposta correta: <code><?= e($q['respostas'][0]) ?></code></p>
          <?php endif; ?>
        <?php else: ?>
          <details><summary>Ver dica</summary><p><?= e($q['dica']) ?></p></details>
        <?php endif; ?>

        <div class="wizard-controles">
          <button type="button" class="btn-voltar" onclick="mudarPasso(-1)" <?= $passo_atual === 1 ? 'disabled style="opacity:0.5; cursor:not-allowed;"' : '' ?>>Anterior</button>
          <span class="progresso-wizard">Passo <?= $passo_atual ?> / <?= $total_questoes ?></span>
          
          <?php if ($passo_atual < $total_questoes): ?>
            <button type="button" class="btn-proximo" onclick="mudarPasso(1)">Próxima</button>
          <?php else: ?>
            <button type="submit" class="btn-enviar">Verificar todas as respostas</button>
          <?php endif; ?>
        </div>
      </section>
      <?php endforeach; ?>

      <?php if ($enviado): ?>
        <div class="acoes" style="margin-top: 20px; text-align: center;">
          <a class="refazer" href="?lang=<?= $lang ?>&nivel=<?= e($filtro) ?>">Tentar de novo</a>
        </div>
      <?php endif; ?>

    </form>
  <?php endif; ?>
</main>

<script>
  let passoAtual = 1;
  const totalPassos = <?= $total_questoes ?>;

  function mudarPasso(direcao) {
    const passos = document.querySelectorAll('.wizard-passo');
    passos[passoAtual - 1].classList.remove('ativo-passo');
    passoAtual += direcao;
    if (passoAtual < 1) passoAtual = 1;
    if (passoAtual > totalPassos) passoAtual = totalPassos;
    passos[passoAtual - 1].classList.add('ativo-passo');
    window.scrollTo({ top: 0, behavior: 'smooth' });
    
    const inputAtual = passos[passoAtual - 1].querySelector('input[type="text"]');
    if (inputAtual) inputAtual.focus();
  }

  document.addEventListener('DOMContentLoaded', () => {
    const inputs = document.querySelectorAll('.wizard-passo input[type="text"]');
    
    inputs.forEach((input, index) => {
      input.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
          event.preventDefault();
          if (index < totalPassos - 1) {
            mudarPasso(1);
          } else {
            document.getElementById('wizardForm').submit();
          }
        }
      });
    });
  });
</script>
</body>
</html>