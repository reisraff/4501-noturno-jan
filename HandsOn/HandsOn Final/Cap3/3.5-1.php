<?php
	
interface Televisao
{
	public function aumentaVolume();
	public function diminuiVolume();
	public function trocaCanal($novoCanal);
	public function liga();
	public function desliga();
}

class TV implements Televisao
{
	private $volume = 10;
	private $canal = 5;
	private $estado = 'OFF';

	public function aumentaVolume()
	{
		++$this->volume;
		echo "<p>Aumentando volume para: {$this->volume}</p>";
	}

	public function diminuiVolume()
	{
		--$this->volume;
		echo "<p>Diminuindo volume para: {$this->volume}</p>";
	}

	public function trocaCanal($novoCanal)
	{
		$this->canal = $novoCanal;
		echo "<p>Novo canal: {$this->canal}</p>";
	}

	public function liga()
	{
		$this->estado ='ON';
		echo "<p>A TV ligou</p>";
		echo "<p>Canal atual: {$this->canal}</p>";
	}

	public function desliga()
	{
		$this->estado = 'OFF';
		echo "<p>A TV desligou</p>";
	}
}

$tv = new TV();
$tv->liga();
$tv->aumentaVolume();
$tv->diminuiVolume();
$tv->diminuiVolume();
$tv->trocaCanal(4);
$tv->desliga();