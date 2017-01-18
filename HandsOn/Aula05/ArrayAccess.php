<?php

class User implements ArrayAccess
{
	private $name;
	private $email;

	public function offsetExists($offset)
	{
		return isset($this->{$offset});
	}

	public function offsetGet($offset)
	{
		return $this->{$offset};
	}

	public function offsetSet($offset, $value)
	{
		$this->{$offset} = $value;
	}

	public function offsetUnset($offset)
	{
		unset($this->{$offset});
	}
}

$user = new User;

$user['name'] = 'Rafael Reis';
var_dump($user['name']);

var_dump(isset($user['name']));

var_dump(isset($user['age']));

unset($user['name']);
// var_dump($user['name']);
// Returns an error, because name doen't exists anymore
