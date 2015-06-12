<?php

$diretorio = new GlobIterator('/var/www/*.php');

foreach($diretorio as $item)
{
	echo "- ".$item."<br/>";
}