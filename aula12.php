<?php
function validartelefone ($celular){
    $ddd = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 24, 27, 28, 31, 32, 33, 34, 35, 37, 38, 41, 42, 43, 44, 45, 46, 47, 48, 49, 51, 53, 54, 55, 61, 62, 63, 64, 65, 66, 67, 68, 69, 71, 73, 74, 75, 77, 79, 81, 82, 83, 84, 85, 86, 87, 88, 89, 91, 92, 93, 94, 95, 96, 97, 98);
    // elimina qualquer outra coisa diferente de números
    $celular = preg_replace("/[^0-9]/", "", $celular);  

    $pais = substr($celular, 0, 2);
    $dddCelular = substr($celular, 2, 2);
    $dddValido = in_array($dddCelular, $ddd);
    
    if (strlen($celular) == 13 && $pais == "55" && $dddValido) {
        return true;
    }
    
    return false;
 }

 function Mascktelefone ($celular){
    $celularMasck = "";
    $masckCelular = "+## (##) #########";
    $a = 0;

    for ($i= 0; $i < strlen($masckCelular); $i++){

        if ($masckCelular[$i] == '#') {
            $celularMasck .= $celular[$a]; 
            $a++;
        } else {
            $celularMasck .= $masckCelular[$i]; 
        }
    }

    return $celularMasck;
}
  
$celular = '+55 (51) 986043904';
$resultado =  validartelefone($celular);
$celular = preg_replace("/[^0-9]/", "", $celular);
$celular = Mascktelefone($celular);   

if ($resultado) {
    echo "O celular informado " . $celular . " é valido";
} else {
    echo "O celular informado " . $celular . " é <b> invalido </b>";
}