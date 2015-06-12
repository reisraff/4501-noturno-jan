<?php

interface FreteStrategy
{
	public function calcular();
}

class FreteNormal implements FreteStrategy
{
	public function calcular()
	{
		echo "<p>Frete normal</p>";
		return 2;
	}
}

class FreteExpresso implements FreteStrategy
{
	public function calcular()
	{
		echo "<p>Frete expresso</p>";
		return 5;
	}
}

class FreteTurbo implements FreteStrategy
{
	public function calcular()
	{
		echo "<p>Frete turbo</p>";
		return 10;
	}
}

class Pedido
{
	private $freteStrategy;

	public function __construct(FreteStrategy $freteStrategy)
	{
		$this->freteStrategy = $freteStrategy;
	}

	public function calcularTotalPedido()
	{
		$totalPedido = 0;

		return $totalPedido += $this->freteStrategy->calcular();
	}
}

$tipoFrete = 'frete_expresso';

if($tipoFrete === 'frete_normal')
{
	$freteStrategy = new FreteNormal();
}
elseif($tipoFrete === 'frete_expresso')
{
	$freteStrategy = new FreteExpresso();
}
elseif($tipoFrete === 'frete_turbo')
{
	$freteStrategy = new FreteExpresso();
}

$pedido = new Pedido($freteStrategy);
echo "Total Pedido - R$ {$pedido->calcularTotalPedido()} reais";