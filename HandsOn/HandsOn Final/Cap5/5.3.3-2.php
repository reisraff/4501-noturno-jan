<?php

class Pai
{
	public static $nome = 'Classe Pai';

	public static function pegaNome()
	{
		return static::$nome;
	}
}

class Filha extends Pai
{
	public static $nome = 'Classe Filha';
}

echo Filha::pegaNome()."<br/>";
echo Pai::pegaNome();