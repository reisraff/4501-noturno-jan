<?php

class Pedido
{
	public function __construct($tipoFrete)
	{
		if($tipoFrete === 'frete_normal')
		{
			echo "Frete normal";
		}
		elseif($tipoFrete === 'frete_expresso')
		{
			echo "Frete expresso";
		}
		elseif($tipoFrete === 'frete_turbo')
		{
			echo "Frete turbo";
		}
		else
		{
			echo "Nenhum frete encontrado";
		}
	}
}

$pedido = new Pedido('frete_expresso');