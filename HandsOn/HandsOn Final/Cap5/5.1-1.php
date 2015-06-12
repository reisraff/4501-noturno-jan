<?php

trait LogTrait
{
	public function log($message)
	{
		echo "Escrevendo no arquivo <a href='log.txt' target='_blank'>log.txt</a>";
		file_put_contents(
			'log.txt',
			$message.PHP_EOL,
			FILE_APPEND
		);
	}
}

class Z{
}

class X extends Z
{
	use LogTrait;

	public function save()
	{
		$this->log('Arquivo de Trait foi aberto dia '.date("d.m.Y").' as '.date("H:i:s"));
	}
}

$classX = new X();
$classX->save();