<?php
$alunos2021 = [
    0 => 'Ana',
    1 =>'João',
    2 =>'Maria',
    3 =>'Roberto',
    4 =>'Vinicius',
    5 =>'Mike'
];

$novosAlunos = [
    6 =>'Patricia',
    7 =>'Nico',
    8 =>'Kilderson',
    9 =>'Daiane'
];

// FORMAS DE FUNDIR ARRAYS

// Através da função array_merge
$alunos2022 = array_merge($alunos2021, $novosAlunos);

// Através do operador matemático + (porém tem ressalvas)
$alunos2022 = $alunos2021 + $novosAlunos;

// Adiciona vários valores ao array simultaneamente
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

// Adiciona um valor ao array:
$alunos2022[] = 'Luiz';

// Adiciona um ou mais valor(es) na primeira posição do array:
array_unshift($alunos2022,'Staphane');

// Remove e retorna o primeiro valor de um array:
array_shift($alunos2022);

// Remove e retorna o último valor de um array:
array_pop($alunos2022);
