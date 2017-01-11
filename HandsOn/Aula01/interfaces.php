<?php

interface Conta
{
    public function depositar($valor);
    public function sacar($valor);
    public function setTitular($titular);
}

class Corrente implements Conta
{
    private $titular;
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
    public function sacar($valor)
    {
        $this->saldo -= 1 + $valor;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }
}

class Poupanca implements Conta
{
    private $titular;
    private $saldo;
    private $qntSaques;

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
    public function sacar($valor)
    {
        $this->qntSaques++;
        $this->saldo -= $valor;
    }
    public function setTitular($titular)
    {
        $this->titular = $titular;
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