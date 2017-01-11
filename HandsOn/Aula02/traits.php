<?php

trait A{
	public function mostrarAlgo() {
		echo __METHOD__;
	}
}

trait B{
	public function mostrarAlgo(){
		echo __METHOD__;
	}
}

class C
{
	use A, B {
		B::mostrarAlgo insteadof A;
		A::mostrarAlgo as mostrarAlgoA;
	}
}

$c = new C();
$c->mostrarAlgo();
$c->mostrarAlgoA();
