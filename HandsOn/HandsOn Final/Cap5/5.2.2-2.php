<?php

include '5.2.1-1.php';

use Modelo\Cliente as ClienteModelo;

$cliente = new ClienteModelo('4Linux');
$cliente->mostraNome();