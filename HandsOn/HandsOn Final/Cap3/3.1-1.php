<?php

abstract class FormaGeometrica
{
}

class Quadrado extends FormaGeometrica
{
}

class Circulo extends FormaGeometrica
{
}

class Triangulo extends FormaGeometrica
{
}

$quadrado  = new Quadrado();
$circulo   = new Circulo();
$triangulo = new Triangulo();
$forma     = new FormaGeometrica(); // erro