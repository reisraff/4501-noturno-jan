<?php

class Impressora
{
	public function imprimir($doc)
	{
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

class Documento
{
	private $conteudo;

	public function __construct($conteudo)
	{
		$this->conteudo = $conteudo;
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}
}

$impressora = new Impressora();
$impressora->imprimir('Ola');