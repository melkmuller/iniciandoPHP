<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Model\Endereco;

class Conta
{
    private string $titular;
    protected float $saldo = 0;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorSaque;

    }

    abstract public function percentualTarifa(): float;

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;

    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaNomeCpf(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroDeContas;
    }

}