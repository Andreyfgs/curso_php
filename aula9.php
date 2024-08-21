<?php

/*function Tabuada($tabuada) {
    for($tabuada=1; $tabuada <= 10; $tabuada++) {
        echo "<br> Tabuada do $tabuada <br>";
     // Inicia o laço interno para multiplicar a tabuada por 0-10   
    for($n=0; $n <=10; $n++){
        echo "$tabuada x $n = " . $tabuada*$n . "<br>";
        }
    
    }  
}

Tabuada($tabuada);

/*function imprimir() {
    $abc = 20;

    return $abc;
}

$resultado = imprimir();

echo $resultado;*/

/*
* Criar uma calculadora utilizando funções, recebendo 2 números como parametros.
*
* Operações: + - * /
*
* Retornar o valor para o usuário, salvar em uma outra variavel e exibir este valor.
*/
echo "<strong>Calculadora usando função</strong>";
echo "<br>";
$numero1 = 10;
$numero2 = 5;

function adicao($numero1 , $numero2){
   return $numero1 + $numero2;    
}
$resultado = adicao($numero1 , $numero2);
echo "Adição =" .$resultado;

echo "<br>";

function subtracao($numero1 , $numero2){
    return $numero1 - $numero2;
}
$resultado = subtracao($numero1 , $numero2);
echo "subtração =" . $resultado;    

echo "<br>";

function divisao($numero1 , $numero2){
    return $numero1 / $numero2;
}
$resultado = divisao($numero1 , $numero2);
echo "divisão =" . $resultado;

echo "<br>";

function multiplicacao($numero1 , $numero2){
    return $numero1 * $numero2;
}
$resultado = multiplicacao($numero1 , $numero2);
echo "multiplicação =" . $resultado;

echo "<br>";

 /*function calculadora($valor1, $operador, $valor2){

    $resultado = 0;

    if ($operador == '+'){
    $resultado = $valor1 + $valor2;
    }
    
    if ($operador == '-'){
    $resultado = $valor1 - $valor2;
    }

    if ($operador == '*'){
    $resultado = $valor1 * $valor2;
    }

    if ($operador == '/'){
    $resultado = $valor1 / $valor2;
    }

    if ($operador == '%'){
    $resultado = $valor1 *$valor2 /100;
    }

    return $resultado;
}
    $valor1 = 100;
    $operador = "%";
    $valor2 = 10;

    $resultado = calculadora($valor1, $operador, $valor2);

    echo "O resultado de: $valor1 $operador $valor2 = $resultado";

/**
 * UTILIZAR FUNCOES
 * Crie um sistema bancario contendo as seguintes operacoes:
 * 
 * Deposito, Saque, Extrato(saldo)
 */ //&$saldoAtual vai ser o mesmo valor dentro ou fora do escopo  (ponteiro) 

 /*function banco($operacao, $saldoAtual){ 
 
 $saldo = $saldoAtual;
    if ($operacao == "extrato"){
        return $saldo;
    }
    
    return $saldo; 
    }
 
$saldoAtual = 50;
 $valor = 100;
 $operacao = "deposito";
 
 $saldoAtual = banco($valor, $operacao, $saldoAtual);
 echo "extrato: $valor $operação = $saldoAtual<br>";
 
 $operação = "saque";
 $saldoAtual = banco($valor, $operacao, $saldoAtual);
 echo "extrato: $valor $operacao = $saldoAtual<br>";*/

 echo "<br>";

 echo "<strong>Sistema bancário</strong><br>";
 function banco($valor, $operacao, &$saldoAtual) {
   
  $mensagens = "";
    
    if ($operacao == "deposito") {
        $saldoAtual += $valor; // Adiciona o valor ao saldo atual
        $mensagens = "Depósito de $valor realizado; Saldo atual: $saldoAtual";
    } elseif ($operacao == "saque") {
        $saldoAtual -= $valor; // Subtrai o valor do saldo atual
        $mensagens = "Saque de $valor realizado; Saldo atual: $saldoAtual";
    }elseif ($valor <=0){
        echo "O valor de deposito deve ser positivo"; 
        
    }
    return $mensagens; 
}

$saldoAtual = 500;
$valor = 250;

// depósito
$operacao = "deposito";
$mensagens = banco($valor, $operacao, $saldoAtual);
echo "$mensagens<br>";

// saque
$operacao = "saque";
$mensagens = banco($valor, $operacao, $saldoAtual); // função banco executa e fica amazenada na varoavel $mensagens.
echo "$mensagens<br>";

// validar para não ter deposito vazio.
// não pode sacar mais que tem na conta.
?>