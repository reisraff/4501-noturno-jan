<?php

class FrontController
{
	public function run()
	{
		$route = isset($_GET['route']) ?
			$_GET['route'] :
			'index/index';

		$route = explode('/', $route);

		$pathView = $controller = $route[0];
		$action = $route[1];
		$pathView .= '/' . $route[1];

		$id = isset($route[2]) ?
			$route[2] :
			null;

		$controllerClass = '\\Controller\\'
			. ucfirst($controller)
			. 'Controller';

		$controllerClass = new $controllerClass();
		$controllerClass->{$action}();
	}
}
