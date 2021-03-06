<?php

namespace Alura\Banco\Model\Pessoa;

use Alura\Banco\Model\AcessoPropriedades;
use Alura\Banco\Model\Cpf;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    final protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter ao menos cinco caracteres";
            exit();
        }
    }

}