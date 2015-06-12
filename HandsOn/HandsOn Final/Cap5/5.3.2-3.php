<?php

class Caneta
{

	private static $tamanho = 10;
	private $cor;

	public function __construct($cor)
	{
		$this->cor = $cor;
	}

	public function getCor()
	{
		return $this->cor;
	}

	public static function getTamanho()
	{
		return self::$tamanho;
	}
}

$canetaAzul     = new Caneta('azul');
$canetaPreta    = new Caneta('preta');
$canetaVermelha = new Caneta('vermelha');

echo "<p>Caneta 1</p>";
echo "<p>Cor: ".$canetaAzul->getCor()."</p>";
echo "<p>Tamanho: ".Caneta::getTamanho()."</p>";

echo "<hr/>";
echo "<p>Caneta 2</p>";
echo "<p>Cor: ".$canetaPreta->getCor()."</p>";
echo "<p>Tamanho: ".Caneta::getTamanho()."</p>";

echo "<hr/>";
echo "<p>Caneta 3</p>";
echo "<p>Cor: ".$canetaVermelha->getCor()."</p>";
echo "<p>Tamanho: ".Caneta::getTamanho()."</p>";