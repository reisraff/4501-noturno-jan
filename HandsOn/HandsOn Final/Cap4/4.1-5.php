<?php

class Impressora
{
	public function imprimir(DocumentoGenerico $doc)
	{
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}

class DocumentoGenerico
{
	protected $conteudo;

	public function getConteudo()
	{
		return $this->conteudo;
	}
}

class Documento extends DocumentoGenerico
{
	public function __construct($conteudo)
	{
		$this->conteudo = $conteudo;
	}
}

class Planilha extends DocumentoGenerico
{
	public function __construct(array $linhas)
	{
		$this->conteudo = '';
		foreach($linhas as $linha)
		{
			$this->conteudo .= implode(';', $linha)."<br/>";
		}
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