<?php

class Pai
{
	protected static $nome = 'Classe Pai';

	public static function pegaNome()
	{
		return self::$nome;
	}
}

class Filha extends Pai
{
	protected static $nome = 'Classe Filha';
}

echo Filha::pegaNome()."<br/>";
echo Pai::pegaNome();