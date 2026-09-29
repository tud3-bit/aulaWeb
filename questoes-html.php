<?php
// Questões em HTML. Use ___ para a lacuna (apenas uma por questão).
// As respostas são comparadas sem espaços e sem diferenciar maiúsculas de minúsculas.
$lista = [];
$q = function ($nivel, $titulo, $dica, $codigo, $respostas) use (&$lista) {
    $lista[] = ['id' => count($lista) + 1, 'nivel' => $nivel, 'titulo' => $titulo,
                'dica' => $dica, 'codigo' => $codigo, 'respostas' => $respostas];
};

// ================= FÁCIL =================
$q('facil', 'Estrutura básica (Tag raiz)', 'Qual é a tag principal que envolve todo o conteúdo de um documento HTML?', <<<'CODIGO'
<___ lang="pt-BR">
    <head><title>Página</title></head>
    <body>Olá</body>
</___>
CODIGO, ['html']);

$q('facil', 'Cabeçalho principal', 'Qual tag representa o título de maior importância (nível 1) em uma página?', <<<'CODIGO'
<___>Bem-vindo ao site</___>
CODIGO, ['h1']);

$q('facil', 'Inserir imagem', 'Qual tag é utilizada para exibir imagens em uma página web?', <<<'CODIGO'
<___ src="foto.jpg" alt="Exemplo">
CODIGO, ['img']);

$q('facil', 'Criar um link', 'Qual tag define um hiperlink para outra página ou recurso?', <<<'CODIGO'
<___ href="https://example.com">Clique aqui</___>
CODIGO, ['a']);

$q('facil', 'Quebra de linha', 'Qual tag insere uma quebra de linha simples no texto?', <<<'CODIGO'
Primeira linha<___>
Segunda linha
CODIGO, ['br']);

$q('facil', 'Listas não ordenadas', 'Qual tag cria uma lista com marcadores (bullet points)?', <<<'CODIGO'
<___>
    <li>Item 1</li>
    <li>Item 2</li>
</___>
CODIGO, ['ul']);

$q('facil', 'Item de lista', 'Qual tag define um item dentro de uma lista ordenada ou não ordenada?', <<<'CODIGO'
<ul>
    <___>Item da lista</___>
</ul>
CODIGO, ['li']);

$q('facil', 'Parágrafo', 'Qual tag define um bloco de parágrafo de texto?', <<<'CODIGO'
<___>Este é um texto explicativo.</___>
CODIGO, ['p']);

$q('facil', 'Atributo de destino do link', 'Qual atributo abre um link em uma nova aba do navegador?', <<<'CODIGO'
<a href="https://example.com" target="___">Novo Link</a>
CODIGO, ['_blank']);

$q('facil', 'Linha horizontal', 'Qual tag cria uma linha divisória temática horizontal na página?', <<<'CODIGO'
<p>Seção 1</p>
<___>
<p>Seção 2</p>
CODIGO, ['hr']);

// ================= INTERMEDIÁRIO =================
$q('intermediario', 'Criar um formulário', 'Qual tag agrupa elementos de entrada para submissão de dados?', <<<'CODIGO'
<___ action="enviar.php" method="POST">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</___>
CODIGO, ['form']);

$q('intermediario', 'Campo de entrada de texto', 'Qual o valor do atributo type para criar uma caixa de texto simples?', <<<'CODIGO'
<label for="usuario">Usuário:</label>
<input type="___" id="usuario" name="usuario">
CODIGO, ['text']);

$q('intermediario', 'Campo de senha', 'Qual o valor do atributo type que oculta os caracteres digitados (senha)?', <<<'CODIGO'
<input type="___" name="senha" placeholder="Digite sua senha">
CODIGO, ['password']);

$q('intermediario', 'Tabelas - Linha da tabela', 'Qual tag define uma linha dentro de uma tabela HTML?', <<<'CODIGO'
<table>
    <___>
        <td>Dado 1</td>
        <td>Dado 2</td>
    </___>
</table>
CODIGO, ['tr']);

$q('intermediario', 'Tabelas - Célula de cabeçalho', 'Qual tag define uma célula de cabeçalho em negrito e centralizada em uma tabela?', <<<'CODIGO'
<tr>
    <___>Nome</___>
    <___>Idade</___>
</tr>
CODIGO, ['th']);

$q('intermediario', 'Associação de rótulo (Label)', 'Qual atributo do elemento <label> conecta o texto diretamente ao campo de formulário pelo ID?', <<<'CODIGO'
<label ___="email">E-mail:</label>
<input type="email" id="email">
CODIGO, ['for']);

$q('intermediario', 'Área de texto multilinha', 'Qual tag cria uma caixa de texto grande com várias linhas para comentários?', <<<'CODIGO'
<___ name="mensagem" rows="4" cols="50"></___>
CODIGO, ['textarea']);

$q('intermediario', 'Menu de seleção (Dropdown)', 'Qual tag cria uma lista suspensa de opções selecionáveis?', <<<'CODIGO'
<select name="estado">
    <___ value="pe">Pernambuco</___>
    <___ value="sp">São Paulo</___>
</select>
CODIGO, ['option']);

$q('intermediario', 'Agrupamento genérico em bloco', 'Qual tag semântica genérica em bloco é amplamente usada para estilização e estruturação?', <<<'CODIGO'
<___ class="container">
    <h2>Título do Bloco</h2>
</___>
CODIGO, ['div']);

$q('intermediario', 'Agrupamento genérico em linha', 'Qual tag genérica em linha (inline) destaca partes de um texto?', <<<'CODIGO'
<p>Este texto tem <___ class="destaque">uma palavra</___ importante.</p>
CODIGO, ['span']);

// ================= DIFÍCIL =================
$q('dificil', 'Seção de cabeçalho do site', 'Qual tag semântica representa o cabeçalho superior de uma página ou seção?', <<<'CODIGO'
<___>
    <h1>Logotipo da Empresa</h1>
    <nav>Menu</nav>
</___>
CODIGO, ['header']);

$q('dificil', 'Rodapé do documento', 'Qual tag semântica representa o rodapé de uma página web ou artigo?', <<<'CODIGO'
<___>
    <p>&copy; 2026 Todos os direitos reservados.</p>
</___>
CODIGO, ['footer']);

$q('dificil', 'Navegação principal', 'Qual tag semântica agrupa os links de navegação principal do site?', <<<'CODIGO'
<___>
    <a href="#home">Home</a> | <a href="#sobre">Sobre</a>
</___>
CODIGO, ['nav']);

$q('dificil', 'Artigo independente', 'Qual tag semântica representa um conteúdo autônomo, como uma postagem de blog ou notícia?', <<<'CODIGO'
<___>
    <h2>Notícia de Última Hora</h2>
    <p>Conteúdo da notícia...</p>
</___>
CODIGO, ['article']);

$q('dificil', 'Conteúdo lateral ou secundário', 'Qual tag semântica é usada para barras laterais ou conteúdos tangenciais ao texto principal?', <<<'CODIGO'
<___>
    <h3>Artigos Relacionados</h3>
</___>
CODIGO, ['aside']);

$q('dificil', 'Campo obrigatório em formulários', 'Qual atributo booleano impede que um formulário seja enviado se o campo estiver vazio?', <<<'CODIGO'
<input type="text" name="email" ___>
CODIGO, ['required']);

$q('dificil', 'Inclusão de código externo (Iframe)', 'Qual tag permite incorporar outra página HTML ou vídeo do YouTube na página atual?', <<<'CODIGO'
<___ src="https://www.youtube.com/embed/xyz" width="560" height="315"></___>
CODIGO, ['iframe']);

$q('dificil', 'Definição de caminhos base ou metadados', 'Em qual tag dentro do <head> declaramos a codificação de caracteres (ex: UTF-8)?', <<<'CODIGO'
<head>
    <___ charset="UTF-8">
</head>
CODIGO, ['meta']);

$q('dificil', 'Agrupamento de formulário (Fieldset)', 'Qual tag agrupa elementos relacionados em um formulário, acompanhada opcionalmente por um título?', <<<'CODIGO'
<___>
    <legend>Dados Pessoais</legend>
    <input type="text" name="nome">
</___>
CODIGO, ['fieldset']);

$q('dificil', 'Validação por expressão regular (Pattern)', 'Qual atributo permite definir uma regra de expressão regular que o input deve obedecer?', <<<'CODIGO'
<input type="text" name="cep" ___="\d{5}-\d{3}" placeholder="00000-000">
CODIGO, ['pattern']);

return $lista;