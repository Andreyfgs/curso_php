<?php 
$nome = "Andrey";
$sobrenome = "Fagundes";
echo "Olá ".$nome." ".$sobrenome."!<br>"; 

//echo strlen conta o tamanho da string "quantas letras tem".
echo strlen($nome); 
echo "<br>";
echo strlen($sobrenome);
echo "<br>";
echo strlen($nome." ".$sobrenome);
echo "<br>";

//echo strtoupper é para deixar a string em MAIÚSCULO.
echo strtoupper($nome);
echo "<br>";
echo strtoupper("bla bla bla");

echo "<br>";
//echo strtolower é para deixar as strings em MINÚSCULO.
echo strtolower("TEXTO DE TESTE");
echo strtolower("<br>LETS GO");


echo "<Tudo sobre a data atual<br>";
echo "<br>";
echo date("d/m/Y");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("h:i:s");
echo "<br>";
echo date("d/m/Y H:i:s A");
echo "<br>";
echo date("w"); //0 domingo - 6 Sábado
// Crie uma variavel para armazenar o valor da função date("w")
// Utilize IF para válidar qual é o dia da semana e exibir para
// o usuário, sendo que 0 é domingo, e 6 é sábado 
echo "<br>";


$diaDaSemana = date("w");

if($diaDaSemana == 0){
    echo "É domingo";
}elseif($diaDaSemana == 1){
    echo "É segunda";
}elseif($diaDaSemana == 2){
    echo "É terça";
}elseif($diaDaSemana == 3){
    echo "É quarta";
}elseif($diaDaSemana == 4){
    echo "É quinta";
}elseif($diaDaSemana == 5){
    echo "É sexta";
}elseif($diaDaSemana == 6){
    echo "É sábado";
}
echo "<br>";
switch ($diaDaSemana){
case 0:
    echo "é domingo";
    break;
case 1:
    echo "é segunda";
    break;
case 2:
    echo "é terça";
    break;
case 3:
    echo "é quarta";
    break;
case 4:
    echo "é quinta";
    break;
case 5:
    echo "é sexta";
    break;
case 6:
    echo "é sábado";
    break;
default: 
    //se chegou no default é porque não 'casou' com nenhum valor
    echo "Não possui";
     break;
}

echo "<br>Laços";
echo "<br>";
for ($i=1; $i <10 ; $i++) { 
    echo $i. "<br>";
}
?>