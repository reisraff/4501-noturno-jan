<?php

class SaldoInsulficienteException extends Exception
{}

/**
 * Classe Contas serve para fazer saque
 *
 * @author Rafael
 * @version 1.0
 */
class Contas 
{
  protected $saldo = 0;

  /**
   * Metodo sacar server para sacar dinheiro
   *
   * @param int $valor
   *
   * @throws SaldoInsulficienteException
   */
  public function sacar( $valor ) 
  {
    if( $this->saldo < $valor ) {
      throw new SaldoInsulficienteException('Saldo Insuficiente');
    } else {
      $this->saldo -= $valor;
    }
  }
}

$conta = new Contas();

try {
  $conta->sacar( 500 );
} catch( Exception $excecao ) {
  if ($excecao instanceof Exception) {
    echo "Exceção não esperada";
  } elseif ($excecao instanceof SaldoInsulficienteException) {
    echo $excecao->getMessage();
  }
}