<?php

$dados = ['Vinicius', 10, 24];
list($nome, $nota, $idade) = $dados; // Cria uma variável para cada valor do array

$dados2 = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24
];

// Extrai as chaves do array e transforma em variáveis e os valores viram os valores das variáveis
extract($dados2);
var_dump($nome, $nota, $idade);

// Compacta as variáveis em um array
var_dump(compact('nome', 'nota', 'idade'));

// retorna a quantidade de chaves no array
count($dados2);

