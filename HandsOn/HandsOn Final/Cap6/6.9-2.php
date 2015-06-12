<?php

class Input
{
	public function __construct($type, $value)
	{
		$this->type = $type;
		$this->value = $value;
	}

	public function __toString()
	{
		return "<input type='{$this->type}' value='{$this->value}' />";
	}
}

$input = new Input('text', '4Linux');
echo $input;