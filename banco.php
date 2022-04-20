<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('132.456.789-00',"Melkizedek Müller");
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaCpfTitular();
echo $primeiraConta->recuperaNomeTitular();
echo $primeiraConta->recuperaSaldo();
