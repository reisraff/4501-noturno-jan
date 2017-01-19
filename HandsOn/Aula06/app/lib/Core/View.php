<?php

namespace Core;

class View
{
	public static function render($view, $data, $template = 'default')
	{
		ob_start();

		include __DIR__
			. '/../../resources/views/'
			. $view
			. '.phtml';

		$content = ob_get_contents();
		ob_end_clean();
		unset($data);

		include __DIR__
			. '/../../resources/templates/'
			. $template
			. '.phtml';
	}
}