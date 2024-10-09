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

    public $saldo = 1000;
    
    public function saque($valor){

        $valor =  preg_replace("/[^0-9]/", "", $valor);

        if($valor <=0 || $valor == ""){ 
            return "<br>Não é possivel efetuar o saque, informe um valor. <br>";
        }

        if( $valor > $this->saldo){
            return "<br>Não é possivel efetuar o saque, o seu saldo é: $this->saldo o valor de saque : $valor <br>";
        }

       $this->saldo -= $valor;
    }
   
    public function deposito($valor){

        $valor =  preg_replace("/[^0-9]/", "", $valor);

        if($valor <=0 || $valor == ""){ // entre () sempre ira executar primeiro tudo que está dentro de ().
            return "<br>O valor do deposito deve ser positivo<br> ";    
        }

        $this->saldo += $valor;
    }   

   public function extrato(){
        return $this->saldo . "<br>";
    }

    public function transferencia($valor, $destinatario){

        $valor =  preg_replace("/[^0-9]/", "", $valor);

        if($valor <=0){
            return "Não foi possivel realizar a transferência. Por favor, insira um valor válido.";
        }

        if($valor > $this->saldo){
            return "Não foi possivel realizar a transferência.  Valor insirido: $valor saldo disponivel :" . $this->saldo . "<br>";
        }

        $this->saldo -= $valor;
    
        return $this->transfCompleta($destinatario);
    }

    private function transfCompleta($destinatario) {
        return "Transferência concluída, destinatário:" . $destinatario . "<br>";
    }
 }

 $banco = new Banco(); //variavel $banco recebe a class Banco()
 echo $banco->saque(100);
 echo "Saldo após saque: " . $banco->extrato() . "<br>";
 
 echo $banco->deposito(10);
 echo "Saldo após depósito: " . $banco->extrato() . "<br>";
 
 echo $banco->transferencia(200, "jao");
 echo "Saldo após transferência: " . $banco->extrato() . "<br>";

 echo $banco->extrato();
 echo "Extrato: ". $banco->extrato();
 
