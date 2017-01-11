<?php

class Conta
{
	private static $saldo = 0;

	public static function sacar($valor)
	{
		self::$saldo -= $valor;
	}

	public static function verSaldo()
	{
		return self::$saldo;
	}

	public static function depositar($valor)
	{
		self::$saldo += $valor;
	}
}

echo '<pre>';

Conta::depositar(100);
var_dump(Conta::verSaldo());
echo '<hr />';

Conta::sacar(80);
var_dump(Conta::verSaldo());
echo '<hr />';