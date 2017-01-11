<?php

class Desconto
{
    private $valor;

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}

class Caixa
{
    private $totalDaCompra;

    public function setTotalDaCompra($totalDaCompra)
    {
        $this->totalDaCompra = $totalDaCompra;
    }

    public function pagarCompra($valor, Desconto $desconto = null)
    {
        echo 'Total: ' . $this->totalDaCompra . '<br />';

        if ($desconto) {
            $total = $this->totalDaCompra - $desconto->getValor();
            echo 'Desconto: ' . $desconto->getValor() . '<br />';
            echo 'Total c/ Desc.: ' . $total . '<br />';

        } else {
            $total = $this->totalDaCompra;
        }

        if ($total > $valor) {
            echo 'Está faltando Grana!';
        } else {
            $troco = $valor - $total;
            echo 'Pago com:' . $valor . '<br />';
            echo 'Troco:' . $troco;
        }
    }
}

$desconto = new Desconto();
$desconto->setValor(10);
$caixa1 = new Caixa();
$caixa1->setTotalDaCompra(50);
$caixa1->pagarCompra(50, $desconto);
echo '<hr />';
$caixa1 = new Caixa();
$caixa1->setTotalDaCompra(50);
$caixa1->pagarCompra(100);
echo '<hr />';
$caixa1 = new Caixa();
$caixa1->setTotalDaCompra(50);
$caixa1->pagarCompra(30);