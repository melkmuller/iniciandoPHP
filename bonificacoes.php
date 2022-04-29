<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Funcionario\Funcionario;

$umFuncionario = new Funcionario(
    'Vinicius Dias',
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Ana Clara',
    new Cpf('123.456.789-11'),
    'Desenvolvedora',
    1000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
echo $controlador->recuperaTotal();