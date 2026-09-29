<?php
// Questões em Python. Use ___ para a lacuna (apenas uma por questão).
// As respostas são comparadas sem espaços e sem diferenciar maiúsculas de minúsculas.
$lista = [];
$q = function ($nivel, $titulo, $dica, $codigo, $respostas) use (&$lista) {
    $lista[] = ['id' => count($lista) + 1, 'nivel' => $nivel, 'titulo' => $titulo,
                'dica' => $dica, 'codigo' => $codigo, 'respostas' => $respostas];
};

// ================= FÁCIL =================
$q('facil', 'Soma de 1 a 5', 'O range não inclui o último número. O resultado deve ser 15.', <<<'CODIGO'
total = 0
for i in range(1, ___):
    total += i
print(total)  # 15
CODIGO, ['6']);

$q('facil', 'Par ou ímpar', 'Qual operador devolve o resto da divisão?', <<<'CODIGO'
n = 8
if n ___ 2 == 0:
    print("par")
CODIGO, ['%']);

$q('facil', 'Maior de dois números', 'Compare a com b.', <<<'CODIGO'
a = 4
b = 9
if a ___ b:
    maior = a
else:
    maior = b
print(maior)  # 9
CODIGO, ['>', '>=']);

$q('facil', 'Tamanho de uma lista', 'Existe uma função embutida que conta os elementos.', <<<'CODIGO'
nomes = ["Ana", "Leo", "Bia"]
print(___(nomes))  # 3
CODIGO, ['len']);

$q('facil', 'Laço while', 'O laço deve rodar enquanto o contador for menor que 3.', <<<'CODIGO'
contador = 0
while contador ___ 3:
    print(contador)
    contador += 1
# imprime 0, 1 e 2
CODIGO, ['<']);

$q('facil', 'Juntar textos', 'Qual operador une duas strings?', <<<'CODIGO'
nome = "Ana"
print("Olá, " ___ nome)  # Olá, Ana
CODIGO, ['+']);

$q('facil', 'Texto para número', 'Qual função converte uma string em inteiro?', <<<'CODIGO'
idade = ___("25")
print(idade + 1)  # 26
CODIGO, ['int']);

$q('facil', 'Adicionar em uma lista', 'Qual método coloca um item no final da lista?', <<<'CODIGO'
lista = [1, 2]
lista.___(3)
print(lista)  # [1, 2, 3]
CODIGO, ['append']);

$q('facil', 'Aprovado ou reprovado', 'Qual palavra cobre o caso em que o if é falso?', <<<'CODIGO'
nota = 5
if nota >= 7:
    print("Aprovado")
___:
    print("Reprovado")
CODIGO, ['else']);

$q('facil', 'Potência', 'Qual operador eleva um número a uma potência?', <<<'CODIGO'
print(2 ___ 3)  # 8
CODIGO, ['**']);

// ================= INTERMEDIÁRIO =================
$q('intermediario', 'Fatorial recursivo', 'A função deve chamar a si mesma com um número menor.', <<<'CODIGO'
def fatorial(n):
    if n <= 1:
        return 1
    return n * fatorial(___)
CODIGO, ['n-1']);

$q('intermediario', 'Contar vogais', 'Qual palavra verifica se um item está dentro de uma sequência?', <<<'CODIGO'
texto = "programacao"
cont = 0
for letra in texto:
    if letra ___ "aeiou":
        cont += 1
print(cont)  # 5
CODIGO, ['in']);

$q('intermediario', 'Inverter uma lista', 'Fatiamento com passo negativo: lista[inicio:fim:passo].', <<<'CODIGO'
lista = [1, 2, 3, 4]
invertida = lista[___]
print(invertida)  # [4, 3, 2, 1]
CODIGO, ['::-1']);

$q('intermediario', 'Média com retorno', 'Qual palavra devolve o resultado da função?', <<<'CODIGO'
def media(a, b):
    ___ (a + b) / 2

print(media(6, 8))  # 7.0
CODIGO, ['return']);

$q('intermediario', 'Acessar dicionário', 'Acesse o valor pela chave.', <<<'CODIGO'
aluno = {"nome": "Leo", "nota": 9}
print(aluno["___"])  # 9
CODIGO, ['nota']);

$q('intermediario', 'Contar letras', 'Qual operador soma e atribui ao mesmo tempo?', <<<'CODIGO'
palavra = "banana"
cont = 0
for c in palavra:
    if c == "a":
        cont ___ 1
print(cont)  # 3
CODIGO, ['+=']);

$q('intermediario', 'Maior valor sem max()', 'Atualize quando encontrar um número maior que o atual.', <<<'CODIGO'
nums = [3, 9, 2]
maior = nums[0]
for n in nums:
    if n ___ maior:
        maior = n
print(maior)  # 9
CODIGO, ['>']);

$q('intermediario', 'Interromper o laço', 'Qual palavra encerra o laço imediatamente?', <<<'CODIGO'
for n in range(10):
    if n == 3:
        ___
    print(n)
# imprime 0, 1 e 2
CODIGO, ['break']);

$q('intermediario', 'List comprehension', 'Qual palavra percorre os elementos na compreensão de lista?', <<<'CODIGO'
quadrados = [x ** 2 ___ x in range(1, 4)]
print(quadrados)  # [1, 4, 9]
CODIGO, ['for']);

$q('intermediario', 'Soma dos dígitos', 'O último dígito de um número é o resto da divisão por 10.', <<<'CODIGO'
n = 123
soma = 0
while n > 0:
    soma += n ___ 10
    n //= 10
print(soma)  # 6
CODIGO, ['%']);

// ================= DIFÍCIL =================
$q('dificil', 'Fibonacci iterativo', 'Cada termo é a soma dos dois anteriores.', <<<'CODIGO'
def fib(n):
    a, b = 0, 1
    for _ in range(n):
        a, b = b, ___
    return a
CODIGO, ['a+b', 'b+a']);

$q('dificil', 'Busca binária', 'O índice do meio deve ser um número inteiro.', <<<'CODIGO'
def busca(v, alvo):
    esq, dir = 0, len(v) - 1
    while esq <= dir:
        meio = (esq + dir) ___ 2
        if v[meio] == alvo:
            return meio
        elif v[meio] < alvo:
            esq = meio + 1
        else:
            dir = meio - 1
    return -1
CODIGO, ['//']);

$q('dificil', 'Número primo', 'O range precisa incluir a raiz quadrada de n.', <<<'CODIGO'
def primo(n):
    if n < 2:
        return False
    for i in range(2, int(n ** 0.5) + ___):
        if n % i == 0:
            return False
    return True
CODIGO, ['1']);

$q('dificil', 'Bubble sort', 'Troque os vizinhos quando o da esquerda for maior que o da direita.', <<<'CODIGO'
def ordenar(v):
    for i in range(len(v)):
        for j in range(len(v) - 1 - i):
            if v[j] ___ v[j + 1]:
                v[j], v[j + 1] = v[j + 1], v[j]
    return v
CODIGO, ['>']);

$q('dificil', 'MDC de Euclides', 'O novo valor de b é o resto da divisão de a por b.', <<<'CODIGO'
def mdc(a, b):
    while b != 0:
        a, b = b, a ___ b
    return a

print(mdc(12, 18))  # 6
CODIGO, ['%']);

$q('dificil', 'Fibonacci com memória', 'Devolva o valor que acabou de ser guardado no dicionário.', <<<'CODIGO'
def fib(n, memo={}):
    if n < 2:
        return n
    if n not in memo:
        memo[n] = fib(n - 1) + fib(n - 2)
    return ___
CODIGO, ['memo[n]']);

$q('dificil', 'Torre de Hanói', 'Mover n discos exige duas vezes os movimentos de n-1 discos, mais um movimento.', <<<'CODIGO'
def movimentos(n):
    if n == 0:
        return 0
    return 2 * movimentos(n - 1) + ___

print(movimentos(3))  # 7
CODIGO, ['1']);

$q('dificil', 'Parênteses balanceados', 'Qual método remove o último item da lista (a pilha)?', <<<'CODIGO'
def balanceado(s):
    pilha = []
    for c in s:
        if c == "(":
            pilha.append(c)
        elif c == ")":
            if not pilha:
                return False
            pilha.___()
    return len(pilha) == 0
CODIGO, ['pop']);

$q('dificil', 'Frequência de letras', 'Se a letra ainda não existe, o valor padrão da contagem deve ser...', <<<'CODIGO'
freq = {}
for c in "abca":
    freq[c] = freq.get(c, ___) + 1
print(freq)  # {'a': 2, 'b': 1, 'c': 1}
CODIGO, ['0']);

$q('dificil', 'Remover duplicados', 'Só guarde o número se ele ainda não foi visto.', <<<'CODIGO'
vistos = set()
resultado = []
for x in [1, 2, 1, 3, 2]:
    if x ___ vistos:
        vistos.add(x)
        resultado.append(x)
print(resultado)  # [1, 2, 3]
CODIGO, ['notin']);

return $lista;