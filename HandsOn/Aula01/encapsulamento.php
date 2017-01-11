<?php

class Carro {
    private $cor;
    protected $ano;
    public $modelo;

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    private function ligarMotor() {
        echo 'Motor ligado';
    }
    protected function ligar() {
        $this->ligarMotor();
    }
}

class Lamborguini extends Carro {
    public function darPartida() {
        $this->ligar();
    }
}

$lamborguini = new Lamborguini();
$lamborguini->setCor('Azul');
$lamborguini->setAno(2010);
$lamborguini->modelo = 'Turbo';

$lamborguini->darPartida();

echo '<pre><hr />';
var_dump($lamborguini);
