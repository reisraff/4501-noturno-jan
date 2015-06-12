<?php

abstract class Validator
{
	public static function isValid($what)
	{
		$validator = new static();
		return $validator->validate($what);
	}

	abstract protected function validate($what);
}

class Integer extends Validator
{
	protected function validate($what)
	{
		return is_int($what);
	}
}

var_dump(Integer::isValid(2));