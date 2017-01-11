<?php

class Carro
{
    public $cor;

    public function setCor($cor)
    {
        $this->cor = $cor;
    }
}

$carro = new Carro();
$carro->setCor('vermelho');

echo 'A cor do carro é ' . $carro->cor;
echo '<hr />';
var_dump($carro instanceof Carro);
