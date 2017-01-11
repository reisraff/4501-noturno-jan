<?php
namespace Banco;

interface BancoInterface {}
class Itau implements BancoInterface {}
class Bradesco implements BancoInterface {}
class Santander implements BancoInterface {}

namespace Conta;

use Banco\BancoInterface as BI;

class Conta {
    public function abrirConta(BI $banco) {
        echo get_class($banco);
    }
}

$banco = new \Banco\Itau();
$conta = new \Conta\Conta();
$conta->abrirConta($banco);