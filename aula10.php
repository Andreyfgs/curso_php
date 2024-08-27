<?php
//validação de dados sempre em primeiro.
function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }

    if( $operacao == "saque" && ($valor <=0 || $valor == "")){ // poderia usar o 
        return "<br>Não é possivel efetuaar o saque, informe um valor. <br>";
    }

    if( $operacao == "saque" && $valor > $saldoAtual){
        return "<br>Não é possivel efetuaar o saque, o seu saldo é: $saldoAtual o valor sacado é: <br>";
    }

    if ($operacao == "saque") {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }


    if($operacao == "deposito" && ($valor <=0 || $valor == "") ){ // entre () sempre ira executar primeiro tudo que está dentro de ().
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

//funcões separadas aonde cada uma vai receber uma string, esse função deve fazer uma validação, verdadeira ou falsa. validar cpf e um cnpj.
// dica: isValidCPF, isValidCNPJ.
/**tem um calculo para fazer um cpf
 * Criar duas funções (separadas) onde cada uma recebe um parametro(string)
 * e retorna um valor boolean (true || false, 0 || 1).
 * 
 * objetivo: Validar CPF, CNPJ
 * 
 * CPF: "0000000000000" : 11 digitos
 * CNPJ: "00000000000000" : 14 digitos
 * 
 * tudo igual ou repetido não conta, não pode ter mais digitos que o padrão
 * ex: o cpf não pode conter mais que 11 digitos e menos que 11 digitos.
 * não pode ter números repetidos
 * dica: cpf 4dev 
 * sempre como uma string
 */

 //function isValidCPF($CPF);

<?php

    function isvalidCPF($cpf) {
    // Remove todos os caracteres não numéricos
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    // Verifica se o CPF possui 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se todos os dígitos são iguais
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Calcula e verifica o primeiro dígito verificador
    for ($t = 9; $t < 11; $t++) {
        $soma = 0;
        for ($i = 0; $i < $t; $i++) {
            $soma += $cpf[$i] * (($t + 1) - $i);
        }
        $resto = $soma % 11;
        $digito = $resto < 2 ? 0 : 11 - $resto;
        if ($cpf[$i] != $digito) {
            return false;
        }
    }

    return true;
}


$cpf = [
    '123.456.789-09', 
    '111.111.111-11', 
    '000.000.000-00', 
    '056.552.020-26'  

foreach ($cpfs as $cpf) {
    if (isvalidCPF($cpf)) {
        echo "CPF $cpf é válido.<br>";
    } else {
        echo "CPF $cpf é inválido.<br>";
    }
}
?>
