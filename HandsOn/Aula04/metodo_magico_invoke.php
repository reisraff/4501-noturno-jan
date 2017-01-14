<?php

class Objeto
{
	/**
	 * Metodo mágico invoke é chamado quando a instancia
	 * da classe é utilizada como função
	 *
	 * @param mixed $parametro
	 * @return string
	 */
	public function __invoke($parametro)
	{
		return 'O objeto foi invocado com o parametro ' . $parametro;
	}
}

$obj = new Objeto;
echo $obj('"Teste"');
