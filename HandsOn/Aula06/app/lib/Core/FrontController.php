<?php

namespace Core;

class FrontController
{
	public function run()
	{
		session_start();

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
		$data = $controllerClass->{$action}($id);

		$data = is_array($data) ? $data : [];

		$template = 'default';

		if (isset($data['template'])) {
			$template = $data['template'];
			unset($data['template']);
		}

		View::render($pathView, $data, $template);

		unset(
			$_SESSION['message_info'],
			$_SESSION['message_warning'],
			$_SESSION['message_error']
		);
	}
}
