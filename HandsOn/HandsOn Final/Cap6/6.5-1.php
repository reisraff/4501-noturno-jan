<?php

class View
{
	private $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}

	public function __get($name)
	{
		return $this->container->$name;
	}

	public function __set($name, $value)
	{
		$this->container->$name = $value;
	}
}

class Container
{
}

$view = new View(new Container());
$view->titulo = "Home";
echo $view->titulo;