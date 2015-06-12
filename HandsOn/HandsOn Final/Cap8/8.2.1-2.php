<?php

$stack = new SplStack();

$stack->push(1);
$stack->push(2);
$stack->push(3);

foreach($stack as $el)
{
	echo 'Pilha ', $el,'<br/>';
}