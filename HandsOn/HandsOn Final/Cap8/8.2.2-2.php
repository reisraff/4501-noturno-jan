<?php

class Pedido
{
	private $cliente, $refeicao;

	public function __construct($cliente, $refeicao)
	{
		$this->cliente = $cliente;
		$this->refeicao = $refeicao;
	}

	public function atender()
	{
		echo "<p>Atender</p>";
	}
}

$pedidos = new SplQueue();
$pedidos[] = new Pedido('João', 'Virado à paulista');
$pedidos[] = new Pedido('Maria', 'Feijoada');

if(count($pedidos) > 0)
{
	$proximoPedido = $pedidos->dequeue();
	$proximoPedido->atender();
}