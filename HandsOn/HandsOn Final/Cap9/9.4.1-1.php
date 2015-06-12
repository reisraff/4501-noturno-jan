<?php

class Router
{
	public function route()
	{
		echo "<p>Procurando a rota correta...</p>";
	}
}

class Dispatcher
{
	public function dispatch($route)
	{
		echo "<p>Executando a rota encontrada...</p>";
	}
}

class FrontController
{
	private $router;
	private $dispatcher;

	public function __construct(Router $router, Dispatcher $dispatcher)
	{
		$this->router = $router;
		$this->dispatcher = $dispatcher;
	}

	public function run()
	{
		$route = $this->router->route();
		$this->dispatcher->dispatch($route);
	}
}

$rota = new Router();
$dispatcher = new Dispatcher();

$frontController = new FrontController($rota, $dispatcher);
$frontController->run();