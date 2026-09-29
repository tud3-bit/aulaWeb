<header>
    <h1>Método de Aprendizado</h1>
    <p>Resolva as questões em formato interativo.</p>
    
    <?php 
    // Garante valores padrão caso alguma variável não tenha sido definida
    $lang = $lang ?? 'php';
    $filtro = $filtro ?? 'todos';
    $linguagens = $linguagens ?? ['html' => 'HTML', 'php' => 'PHP', 'python' => 'Python'];
    $niveis = $niveis ?? ['facil' => 'Fácil', 'intermediario' => 'Intermediário', 'dificil' => 'Difícil'];
    ?>

    <!-- Menu de Linguagens -->
    <nav aria-label="Linguagem">
      <?php foreach ($linguagens as $k => $nome): ?>
        <a href="?lang=<?= $k ?>" class="<?= $lang === $k ? 'ativo' : '' ?>"><?= $nome ?></a>
      <?php endforeach; ?>
    </nav>

    <!-- Menu de Filtro por Nível -->
    <nav aria-label="Filtrar por nível">
      <a href="?lang=<?= $lang ?>&nivel=todos" class="<?= $filtro === 'todos' ? 'ativo' : '' ?>">Todos</a>
      <?php foreach ($niveis as $k => $nome): ?>
        <a href="?lang=<?= $lang ?>&nivel=<?= $k ?>" class="<?= $k ?> <?= $filtro === $k ? 'ativo' : '' ?>"><?= $nome ?></a>
      <?php endforeach; ?>
    </nav>
</header>