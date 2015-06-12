<?php

$diretorio = new DirectoryIterator('/var/www');

foreach($diretorio as $item)
{
	if(!$item->isDot())
	{
		echo "- ".$item."<br/>";
	}
}