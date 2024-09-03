<?php

$celular = 51-986043904;
    function validCelular($celular) {
    
        // Verifica se o número foi informado
        if(empty($celular)) {
            return false;
        }

        // elimina qualquer outra coisa diferente de números
        $celular = preg_replace('/[^0-9]/', '', $celular);
        $celular = str_pad($celular, 11, '0', STR_PAD_LEFT);

        //verifica se o número de digitos é igual a 11
        if(strlen($celular) != 11 ) {
                return false;
        }
        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{10}/', $celular)) {
                return false;
        } else 
        return true;
    }

$celular = 51-986043904;
    
    function addmaskCelular($celular){
        $celularMascarado = " ";
        $maskCelular = '##-#########';
        $a = 0;

        for($i=0; $i <= strlen($maskCelular); $i++){

            if($maskCelular[$i] == '#'){
                $celularMascarado .= $celular[$a]; 
                $a++;
            } else {
                $celularMascarado .= $maskCelular[$i];
            }

        }
    return $celularMascarado;
}

$celularMascarado = addmaskCelular($celular);
echo $celularMascarado;

$celular = 51985435194;

$celularValido = validCelular($celular);
$celular = preg_replace('/[^0-9]/', '', $celular);

    if($celularValido){
        echo "O Celular: $celular é valido.";
    }else {
        echo "O Celular: $celular é invalido.";
    }
