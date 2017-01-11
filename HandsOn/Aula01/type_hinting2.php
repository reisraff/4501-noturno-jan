<?php

interface FreteInterface
{
    public function getValor();
    public function getTempoDeEntrega();
}

class Sedex implements FreteInterface
{
    public function getValor()
    {
        return 50;
    }

    public function getTempoDeEntrega()
    {
        return 2;
    }
}

class Pac implements FreteInterface
{
    public function getValor()
    {
        return 20;
    }
    
    public function getTempoDeEntrega()
    {
        return 9;
    }
}

class Sedex10 implements FreteInterface
{
    public function getValor()
    {
        return 65;
    }
    
    public function getTempoDeEntrega()
    {
        return 1;
    }
}

class Loja
{
    public function enviarPedido(FreteInterface $frete)
    {
        echo 'Vai levar ' . $frete->getTempoDeEntrega() . ' Dias<br />';
        echo 'Custou R$ ' . $frete->getValor();
    }

    public function checarValorTempoDeEntrega(FreteInterface $frete)
    {
        echo 'Dias: ' . $frete->getTempoDeEntrega() . '<br />';
        echo 'R$ ' . $frete->getValor();
    }
}

$sedex = new Sedex();
$pac = new Pac();
$sedex10 = new Sedex10();

$loja = new Loja;
$loja->checarValorTempoDeEntrega('frete');
echo '<hr />';
$loja->enviarPedido($sedex);

