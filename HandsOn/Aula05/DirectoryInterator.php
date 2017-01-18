<?php

$dir = new DirectoryIterator(__DIR__);

foreach ($dir as $item) {
	if ($item->isFile()) {

		$date = new DateTime();
		$date->setTimestamp($item->getMTime());

		echo 'ARQUIVO: '
			. $item->getFilename()
			. ' - '
			. $date->format('Y-m-d H:i:s')
			. ' - '
			. $item->getOwner()
			. '<br />';
	}

	if ($item->isDir()) {
		echo 'DIRETORIO: '
			. $item->getFilename()
			. '<br />';
	}
}
