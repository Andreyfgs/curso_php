<?php 

$nome = "Andrey Fagundes";
$idade = 20;
$cidade = "Bento Gonçalves";

echo "Seja bem vindo $nome à sua cidade $cidade";

echo "<br>";
if ($idade >= 18){
    echo "o $nome é maior de idade!";
}else{
    echo "o $nome, não pode dirigir carros!";
}

echo "<br>";
echo "Super calculadora avançada da Nasa 4.0";
echo "<br>";
$valorA = 50;
$valorB = 40;
$operacao = "adicionar";
$resultado="";

if ($operacao == "soma" || $operacao == "adicao" || $operacao == "adicionar"){
    $resultado = $valorA + $valorB; // || significa "ou".
}elseif($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA - $valorB;
}elseif($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif($operacao == "divisao"|| $operacao == "dividir"){
    $resultado = $valorA / $valorB;
}else{
    echo "Somente são aceitos os seguintes parametros<br>
    soma<br>
    subtrair<br>
    multiplicar<br>
    divisao<br>";
}

if($resultado != ""){
    echo "A operação escolhida foi $operacao com os valores $valorA e $valorB e o resultado é $resultado.";
}




// Testa se a pessoa pode fazer a carteira de motorista
// Precisa ser maior de 18 anos, e ter mais de R$ 1.000,00
$idadePessoa=18;
$dinheiroNaCarteira=1000;


echo "<br>";
if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Parabéns, você pode fazer a carteira de motorista!";
}else {
    echo "Não pode dirigir"
}

//Falta fazer a validação da idade e do dinheiro
// se não tiver idade informar que precisa ser maior de 18
//se não tiver dinheiro precisa informar o valor de 1k
// se não tiver idade e nem dinheiro informar.
?>