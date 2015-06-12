<?php

include '5.2.1-1.php';

use Modelo\Cliente;

$cliente = new Cliente('4Linux');
$cliente->mostraNome();