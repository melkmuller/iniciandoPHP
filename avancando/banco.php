<?php

/*
    Incluindo o arquivo onde estão as funções, neste arquivo, include não dá erro se o arquivo não for encontrado,
    ele ignora e manda um aviso.
    include 'funcoes.php';
*/

// Incluindo arquivos com mais segurança, pois verifica se já foi importado, se sim, ele ignora
require_once 'funcoes.php';

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

// Adiciona uma novo valor, e se não for informada a chave, ele incrementa o maior número inteiro.
$contasCorrentes[] = [
    'titular' => 'Melk',
    'saldo' => 7000
];

$contasCorrentes[12345678902] = depositar($contasCorrentes[12345678902], 900);

$contasCorrentes[12345678903] = sacar($contasCorrentes[12345678903], 500);

unset($contasCorrentes[12345678901]);

titularComLetrasMaiusculas($contasCorrentes[12345678903]);

foreach ($contasCorrentes as $cpf => $conta) {

    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        // Para mostrar arrays associativos dentro de strings é preciso retirar as aspas simples das chaves
        "$cpf - $titular - $saldo"
    );
    // Outra forma é colocando os arrays entre chaves
    // "$cpf - {$conta['titular']} - {&conta['saldo']}"
}
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "<ul />";
?> // Fechando o arquivo PHP

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf ?><h3/>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>

</body>
</html>