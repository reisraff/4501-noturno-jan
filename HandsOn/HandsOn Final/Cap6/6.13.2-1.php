<?php

class Pedido
{
	private $total;
	private $frete;

	public function __construct($total, Frete $frete)
	{
		$this->total = $total;
		$this->frete = $frete;
	}

	public function getTotal()
	{
		return $this->total + $this->frete->getTotal();
	}
}

class Frete
{
	private $total;

	public function __construct($total)
	{
		$this->total = $total;
	}

	public function getTotal()
	{
		return $this->total;
	}
}

$frete = new Frete(10);
$pedido = new Pedido(50, $frete);
echo "Total do pedido com frete - R$ {$pedido->getTotal()} reais";