<?php

// late_static_binding

class Pai
{
	public static $nome = 'PAI';
}

class Filha extends Pai
{
	public static $nome = 'Filha';

	public static function getNome()
	{
		//return self::$nome;
		//return static::$nome;
		return parent::$nome;
	}
}

echo Filha::getNome();
