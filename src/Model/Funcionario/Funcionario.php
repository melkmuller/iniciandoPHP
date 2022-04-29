<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Model\Cpf;
use Model\Pessoa;

 abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->validaNomeTitular($nome);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento($valorAumento): float
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calcularBonificacao(): float;

}