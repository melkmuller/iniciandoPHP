<?php

$contasCorrentes = [
    12345678900 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678901 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12345678902 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

// Adiciona uma novo valor, e se não for informada a chave, ele incremente o maior número inteiro.
$contasCorrentes[] = [
    'titular' => 'Melk',
    'saldo' => 7000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - " . $conta['titular'] . PHP_EOL;
}
