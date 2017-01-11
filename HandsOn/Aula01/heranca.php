<?php

abstract class Ave
{
    public function voar()
    {
        echo 'Voando';
    }
}

class Pardal extends Ave
{
}

$pardal = new Pardal();
$pardal->voar();
