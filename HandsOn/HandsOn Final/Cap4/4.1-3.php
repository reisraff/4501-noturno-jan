<?php

class Impressora
{
	public function imprimir(Documento $doc)
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

$doc = new Documento('Ola');
$impressora = new Impressora();
$impressora->imprimir($doc);