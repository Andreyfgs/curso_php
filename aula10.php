<?php

function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }

    if( $operacao == "saque" && ($valor <=0 || $valor == "")){
        return "<br>O valor do saque é maior que o seu saldo atual <br>";
    }

    if( $operacao == "saque" && $valor > $saldoAtual){
        return "<br>O valor do saque é maior que o seu saldo atual <br>";
    }

    if ($operacao == "saque") {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }


    if($operacao == "deposito" && ($valor <=0 || $valor == "") ){
        return "<br>O valor do deposito deve ser positivo<br> ";    
    }

    if ($operacao == "deposito") {
        // $saldo = $saldo + $valor;
        $saldo += $valor;
    }

    return $saldo;
}

//saldo
$saldoAtual = 500; // tem um valor inicial de 500.
echo "Valor inicial: $saldoAtual<br>";

//deposito
$valor = 300; // 0 || ''
$operacao = "deposito";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

//saque
$valor = -300;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual); // 400, saque, 300
echo "$operacao = $valor, Extrato: $saldoAtual<br>"; // 400

/*$valor = 600;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";*/

// validar para não ter deposito vazio.
// não pode sacar mais que tem na conta.