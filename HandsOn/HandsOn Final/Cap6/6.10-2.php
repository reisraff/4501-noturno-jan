<?php

class Exec
{
	public function execute($fn, array $args)
	{
		call_user_func_array($fn, $args);
	}
}

class MyClass
{
	public function __invoke()
	{
		foreach (func_get_args() as $arg)
		{
			echo $arg.PHP_EOL;
		}
	}
}

$exec = new Exec();
$exec->execute(function($v){
	echo $v.PHP_EOL;
}, array('oi'));

echo "<br/>";

$exec->execute(new MyClass(), array('oi', 'ola'));