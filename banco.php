<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$melk = new Titular( new Cpf('132.456.789-00',"Melkizedek Müller"));
$primeiraConta = new Conta($melk);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
