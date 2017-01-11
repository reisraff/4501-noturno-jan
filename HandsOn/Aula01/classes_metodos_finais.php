<?php

abstract class Conta
{
    protected $titular;
    private $saldo;

    final public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
}

final class Corrente extends Conta
{
    public function sacar($valor)
    {
        parent::sacar(1 + $valor);
    }
}

final class Poupanca extends Conta
{
    private $qntSaques;

    public function sacar($valor)
    {
        $this->qntSaques++;

        parent::sacar($valor);
    }
}

echo '<pre>';

$corrente = new Corrente();
$corrente->setTitular('Rafael');
$corrente->depositar(1000);
$corrente->sacar(100);
var_dump($corrente);
echo '<hr />';

$poupanca = new Poupanca();
$poupanca->setTitular('Rafael');
$poupanca->depositar(1000);
$poupanca->sacar(100);
var_dump($poupanca);