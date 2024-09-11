<?php

/**
 * Criar uma classe/objeto que representa um banco 
 * esta classe devera ter as operações basicas, como:
 * Saque, Deposito, Extrato e Transferência
 * 
 * Também devera, fazer as devidas validações para cada operação
 * EX: não pode sacar mais que tem na conta, depositar envelope sem valor...
 * 
 * Tranferência é a mesma coisa que o pix 
 * ex: quem está mandando deve saber o destinatário...
 */

 class Banco{

    public $saldo = 100;
    public $extrato = "";
    
    function saque($valor, $saldoAtual){

    if($valor <=0 || $valor == ""){ 
        return "<br>Não é possivel efetuaar o saque, informe um valor. <br>";
    }

    if( $valor > $saldoAtual){
        return "<br>Não é possivel efetuar o saque, o seu saldo é: $saldoAtual o valor sacado é: <br>";
    }

       $this->saldo -= $valor;
    }
   
    function deposito($valor, $saldoAtual){
    
    $valor =  preg_replace("/[^0-9]/", "", $valor);
    
    if($valor <=0 || $valor == ""){ // entre () sempre ira executar primeiro tudo que está dentro de ().
        return "<br>O valor do deposito deve ser positivo<br> ";    
    }
        $this->saldo += $valor;
    }   

    function extrato($extrato, $valor, $saldoAtual){
        
        if($valor == $saldoAtual){
            return $extrato;
        }
    }

 }