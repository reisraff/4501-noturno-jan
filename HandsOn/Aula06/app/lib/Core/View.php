<?php

namespace Core;

class View
{
	public static function render($view, array $data, $template = 'default')
	{
		foreach ($data as $key => $value) {
			$$key = $value;
		}

		if (isset($data['data'])) {
			$data = $data['data'];
		} else {
			unset($data);
		}

		ob_start();

		include __DIR__
			. '/../../resources/views/'
			. $view
			. '.phtml';

		$content = ob_get_contents();
		ob_end_clean();

		include __DIR__
			. '/../../resources/templates/'
			. $template
			. '.phtml';
	}
}