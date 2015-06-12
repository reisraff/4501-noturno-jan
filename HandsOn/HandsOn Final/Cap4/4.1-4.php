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

class Planilha
{
	private $conteudo;

	public function __construct(array $linhas)
	{
		$this->conteudo = '';
		foreach ($linhas as $linha)
		{
			$this->conteudo .= implode(';', $linha)."<br/>";
		}
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}
}

$array_planilha = array(array('oi', 'ola'));
$planilha = new Planilha($array_planilha);
$impressora = new Impressora();
$impressora->imprimir($planilha);