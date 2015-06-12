<?php

class Caneta
{

	private static $tamanho = 10;
	private $cor;
	private static $numCanetas = 0;

	public function __construct($cor)
	{
		$this->cor = $cor;
		++self::$numCanetas;
	}

	public function getCor()
	{
		return $this->cor;
	}

	public static function getTamanho()
	{
		return self::$tamanho;
	}

	public static function getNumCanetas()
	{
		return self::$numCanetas;
	}
}

echo "<p>Caneta 1</p>";
$canetaAzul = new Caneta('azul');
echo "<p>Cor: ".$canetaAzul->getCor()."</p>";
echo "<p>Quantidade total de canetas: ".$canetaAzul::getNumCanetas()."</p>";

echo "<hr/>";
echo "<p>Caneta 2</p>";
$canetaPreta = new Caneta('preta');
echo "<p>Cor: ".$canetaPreta->getCor()."</p>";
echo "<p>Quantidade total de canetas: ".$canetaPreta::getNumCanetas()."</p>";

echo "<hr/>";
echo "<p>Caneta 3</p>";
$canetaVermelha = new Caneta('vermelha');
echo "<p>Cor: ".$canetaVermelha->getCor()."</p>";
echo "<p>Quantidade total de canetas: ".$canetaVermelha::getNumCanetas()."</p>";