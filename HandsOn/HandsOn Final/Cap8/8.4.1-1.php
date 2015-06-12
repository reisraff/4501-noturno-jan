<?php

$meuArray = array(1,2,3,4,5);
$arrayIterator = new ArrayIterator($meuArray);

foreach($arrayIterator as $chave => $valor)
{
	echo "Chave: ",$chave," => Valor: ",$valor,"<br/>";
}