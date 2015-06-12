<?php

class Impressora
{
	public function imprimir(Imprimivel $doc)
	{
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

interface Imprimivel
{
	public function getConteudo();
}

class Documento implements Imprimivel
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

class Planilha implements Imprimivel
{
	private $conteudo;

	public function __construct(array $linhas)
	{
		$this->conteudo = '';
		foreach($linhas as $linha)
		{
			$this->conteudo .= implode(';', $linha)."<br/>";
		}
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}
}

echo "<p>Planilha:</p>";
$array_planilha = array(array('oi', 'ola'));
$planilha = new Planilha($array_planilha);
$impressora = new Impressora();
$impressora->imprimir($planilha);

echo "<hr/>";
echo "<p>Documento:</p>";
$doc = new Documento('Ola');
$impressora->imprimir($doc);