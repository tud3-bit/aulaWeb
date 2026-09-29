<?php
// Questões em PHP. Use ___ para a lacuna (apenas uma por questão).
// As respostas são comparadas sem espaços e sem diferenciar maiúsculas de minúsculas.
$lista = [];
$q = function ($nivel, $titulo, $dica, $codigo, $respostas) use (&$lista) {
    $lista[] = ['id' => count($lista) + 1, 'nivel' => $nivel, 'titulo' => $titulo,
                'dica' => $dica, 'codigo' => $codigo, 'respostas' => $respostas];
};

// ================= FÁCIL =================
$q('facil', 'Concatenar texto', 'Em PHP, qual símbolo junta textos?', <<<'CODIGO'
<?php
$nome = "Ana";
echo "Olá, " ___ $nome;  // Olá, Ana
CODIGO, ['.']);

$q('facil', 'Tamanho de um array', 'Existe uma função que conta os elementos de um array.', <<<'CODIGO'
<?php
$frutas = ["maçã", "uva", "pera"];
echo ___($frutas);  // 3
CODIGO, ['count', 'sizeof']);

$q('facil', 'Condição if/else', 'Qual palavra executa o bloco quando o if é falso?', <<<'CODIGO'
<?php
$idade = 15;
if ($idade >= 18) {
    echo "Maior";
} ___ {
    echo "Menor";
}
CODIGO, ['else']);

$q('facil', 'Soma de 1 a 5', 'O laço deve incluir o número 5. O resultado deve ser 15.', <<<'CODIGO'
<?php
$total = 0;
for ($i = 1; $i ___ 5; $i++) {
    $total += $i;
}
echo $total;  // 15
CODIGO, ['<=']);

$q('facil', 'Par ou ímpar', 'Qual operador devolve o resto da divisão?', <<<'CODIGO'
<?php
$n = 8;
if ($n ___ 2 === 0) {
    echo "par";
}
CODIGO, ['%']);

$q('facil', 'Texto para inteiro', 'Qual função converte uma string em número inteiro?', <<<'CODIGO'
<?php
$idade = ___("25");
echo $idade + 1;  // 26
CODIGO, ['intval']);

$q('facil', 'Adicionar ao array', 'Qual função coloca um item no final do array?', <<<'CODIGO'
<?php
$lista = [1, 2];
___($lista, 3);
// $lista agora é [1, 2, 3]
CODIGO, ['array_push']);

$q('facil', 'Tamanho de uma string', 'Qual função conta os caracteres de um texto?', <<<'CODIGO'
<?php
echo ___("banana");  // 6
CODIGO, ['strlen']);

$q('facil', 'Potência', 'Qual operador eleva um número a uma potência?', <<<'CODIGO'
<?php
echo 2 ___ 3;  // 8
CODIGO, ['**']);

$q('facil', 'Declarar variável', 'Toda variável em PHP começa com um símbolo especial.', <<<'CODIGO'
<?php
___nome = "Ana";
echo $nome;  // Ana
CODIGO, ['$']);

// ================= INTERMEDIÁRIO =================
$q('intermediario', 'Somar com foreach', 'Use o operador que soma e atribui ao mesmo tempo.', <<<'CODIGO'
<?php
$notas = [7, 8, 9];
$soma = 0;
foreach ($notas as $n) {
    $soma ___ $n;
}
echo $soma;  // 24
CODIGO, ['+=']);

$q('intermediario', 'Retorno de função', 'Qual palavra devolve um valor de uma função?', <<<'CODIGO'
<?php
function dobro($x) {
    ___ $x * 2;
}
echo dobro(5);  // 10
CODIGO, ['return']);

$q('intermediario', 'Array associativo', 'Acesse o valor pela chave, não pela posição.', <<<'CODIGO'
<?php
$aluno = ["nome" => "Leo", "nota" => 9];
echo $aluno["___"];  // 9
CODIGO, ['nota']);

$q('intermediario', 'Fatorial recursivo', 'A função deve chamar a si mesma com um número menor.', <<<'CODIGO'
<?php
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial(___);
}
echo fatorial(5);  // 120
CODIGO, ['$n-1']);

$q('intermediario', 'Contar vogais', 'Qual função verifica se um valor existe em um array?', <<<'CODIGO'
<?php
$vogais = ["a", "e", "i", "o", "u"];
$cont = 0;
foreach (str_split("programacao") as $l) {
    if (___($l, $vogais)) {
        $cont++;
    }
}
echo $cont;  // 5
CODIGO, ['in_array']);

$q('intermediario', 'Inverter um array', 'Existe uma função pronta que inverte a ordem dos elementos.', <<<'CODIGO'
<?php
$inv = ___([1, 2, 3, 4]);
// $inv é [4, 3, 2, 1]
CODIGO, ['array_reverse']);

$q('intermediario', 'Maior valor sem max()', 'Atualize quando encontrar um número maior que o atual.', <<<'CODIGO'
<?php
$nums = [3, 9, 2];
$maior = $nums[0];
foreach ($nums as $n) {
    if ($n ___ $maior) {
        $maior = $n;
    }
}
echo $maior;  // 9
CODIGO, ['>']);

$q('intermediario', 'Interromper o laço', 'Qual palavra encerra o laço imediatamente?', <<<'CODIGO'
<?php
for ($i = 0; $i < 10; $i++) {
    if ($i === 3) {
        ___;
    }
    echo $i;
}
// imprime 012
CODIGO, ['break']);

$q('intermediario', 'Chave e valor no foreach', 'Qual símbolo liga a chave ao valor no foreach?', <<<'CODIGO'
<?php
$notas = ["Ana" => 8, "Leo" => 6];
foreach ($notas as $nome ___ $nota) {
    echo "$nome: $nota\n";
}
CODIGO, ['=>']);

$q('intermediario', 'Soma dos dígitos', 'O último dígito de um número é o resto da divisão por 10.', <<<'CODIGO'
<?php
$n = 123;
$soma = 0;
while ($n > 0) {
    $soma += $n ___ 10;
    $n = intdiv($n, 10);
}
echo $soma;  // 6
CODIGO, ['%']);

// ================= DIFÍCIL =================
$q('dificil', 'Filtrar números pares', 'Um número é par quando o resto da divisão por 2 é zero.', <<<'CODIGO'
<?php
$nums = [1, 2, 3, 4, 5, 6];
$pares = array_filter($nums, fn($n) => $n ___ 2 === 0);
// $pares contém 2, 4 e 6
CODIGO, ['%']);

$q('dificil', 'Passagem por referência', 'Qual símbolo antes do parâmetro faz a função alterar a variável original?', <<<'CODIGO'
<?php
function incrementa(___$x) {
    $x++;
}
$a = 1;
incrementa($a);
echo $a;  // 2
CODIGO, ['&']);

$q('dificil', 'Ordenar com usort', 'É o operador de comparação "nave espacial", que devolve -1, 0 ou 1.', <<<'CODIGO'
<?php
$v = [5, 2, 9, 1];
usort($v, fn($a, $b) => $a ___ $b);
// $v fica [1, 2, 5, 9]
CODIGO, ['<=>']);

$q('dificil', 'Fibonacci iterativo', 'Cada termo é a soma dos dois anteriores.', <<<'CODIGO'
<?php
function fib($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        [$a, $b] = [$b, ___];
    }
    return $a;
}
CODIGO, ['$a+$b', '$b+$a']);

$q('dificil', 'Busca binária', 'Qual função devolve a divisão inteira?', <<<'CODIGO'
<?php
function busca($v, $alvo) {
    $esq = 0;
    $dir = count($v) - 1;
    while ($esq <= $dir) {
        $meio = ___($esq + $dir, 2);
        if ($v[$meio] === $alvo) {
            return $meio;
        } elseif ($v[$meio] < $alvo) {
            $esq = $meio + 1;
        } else {
            $dir = $meio - 1;
        }
    }
    return -1;
}
CODIGO, ['intdiv']);

$q('dificil', 'Número primo', 'Só é preciso testar divisores até a raiz quadrada de n.', <<<'CODIGO'
<?php
function primo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= ___($n); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}
CODIGO, ['sqrt']);

$q('dificil', 'Bubble sort', 'Troque os vizinhos quando o da esquerda for maior que o da direita.', <<<'CODIGO'
<?php
function ordenar($v) {
    $n = count($v);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($v[$j] ___ $v[$j + 1]) {
                [$v[$j], $v[$j + 1]] = [$v[$j + 1], $v[$j]];
            }
        }
    }
    return $v;
}
CODIGO, ['>']);

$q('dificil', 'Função anônima com array_map', 'Qual palavra cria uma função de seta em PHP 7.4+?', <<<'CODIGO'
<?php
$dobros = array_map(___ ($x) => $x * 2, [1, 2, 3]);
// $dobros é [2, 4, 6]
CODIGO, ['fn']);

$q('dificil', 'Valor padrão com ??', 'Qual operador usa um valor padrão quando a chave não existe?', <<<'CODIGO'
<?php
$nome = $_GET["nome"] ___ "Visitante";
echo "Olá, $nome";
CODIGO, ['??']);

$q('dificil', 'Somar com array_reduce', 'Qual deve ser o valor inicial do acumulador de uma soma?', <<<'CODIGO'
<?php
$soma = array_reduce([1, 2, 3, 4], fn($acc, $x) => $acc + $x, ___);
echo $soma;  // 10
CODIGO, ['0']);

return $lista;