<?php

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Desordenadas: ';
var_dump($notas);

echo 'Ordenadas: ';
var_dump($notasOrdenadas);

$notas2 = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9
    ]
];

function ordenaNotas(array $nota1, array $nota2) : int
{
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas2, 'ordenaNotas');
var_dump($notas2);