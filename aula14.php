<?php

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

    public $saldo = 2000;
    public $valor = 1000;
    
    public function saque($valor){

    if($valor <=0 || $valor == ""){ 
        return "<br>Não é possivel efetuar o saque, informe um valor. <br>";
    }

    if( $valor > $saldo){
        return "<br>Não é possivel efetuar o saque, o seu saldo é: $valor o valor sacado é: $saldo <br>";
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
        return $this->saldo . $saldo;
    }

    public function tranferencia($valor, $destinatario){

        $valor =  preg_replace("/[^0-9]/", "", $valor);

        if($valor <=0){
            return "Não foi possivel realizar a transferência. Por favor, insira um valor válido.";
        }

        if($valor > $this->saldo){
            return "Não foi possivel realizar a transferência. Por favor, insira um valor válido.";
        }

        $this->saldo -= $valor;
    
        return $this->transfCompleta($destinatario);
    }

    private function transfCompleta($destinatario) {
        return "Transferência concluída";
    }
 }

 $banco = new Banco();
 echo $banco->saque(20);
 echo "Saldo após saque: " . $banco->extrato() . "<br>";
 
 echo $banco->deposito(20);
 echo "Saldo após depósito: " . $banco->extrato() . "<br>";
 
 echo $banco->transferencia(200);
 echo "Saldo após transferência: " . $banco->extrato() . "<br>";
 
