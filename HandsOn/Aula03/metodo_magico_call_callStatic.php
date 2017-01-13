<?php

class Objeto
{
	private $props = [];
	private static $propsStatic = [];

	public function __call($metodo, $parametros)
	{
		$tipo = substr($metodo, 0, 3);

		$resto = lcfirst(substr($metodo, 4));

		switch ($tipo) {
			case 'get':
				return isset($this->props[$resto]) ?
					$this->props[$resto] :
					null;
				break;
			case 'set':
				$this->props[$resto] = $parametros[0];
				break;
			
			default:
				return 'Metodo não implementado';
				break;
		}
	}

	public static function __callStatic($metodo, $parametros)
	{
		$tipo = substr($metodo, 0, 3);

		$resto = lcfirst(substr($metodo, 4));

		switch ($tipo) {
			case 'get':
				return isset(self::$propsStatic[$resto]) ?
					self::$propsStatic[$resto] :
					null;
				break;
			case 'set':
				self::$propsStatic[$resto] = $parametros[0];
				break;
			
			default:
				return 'Metodo não implementado';
				break;
		}
	}
}

$obj = new Objeto();

// $obj->setNome('nome');
var_dump($obj->metodoQueNaoExiste());

echo '<br />';

// Objeto::setNome('nome');
// echo Objeto::getNome();