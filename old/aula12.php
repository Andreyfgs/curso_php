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

class FormatarDados {

    // Propriedades || atributos
    public $texto;
    public $mascara;

    public function __construct($texto, $mascara)
    {
        $this->texto = $texto;
        $this->mascara = $mascara;
    }

    public function addMask($texto = "", $mascara = "") {
        
        // (1 == 1) ? true : false;

        // if (1 == 1) {
        //     true;
        // } else {
        //     false;
        // }

        $texto = $texto ? $texto : $this->texto;
        $mascara = $mascara ? $mascara : $this->mascara;

        $a =0;
        $valorMascarado = "";
        
        for ($i=0; $i <= strlen($mascara); $i++) {
    
            if ($mascara[$i] == '#') {
                $valorMascarado .=  $texto[$a];
                $a++;
            } else {
                $valorMascarado .= $mascara[$i];
            }
    
        }
    
        return $valorMascarado;

        //função do cpf

    }function validarCPF($texto){
        // código para remover o q não for numero 
        $texto = preg_replace("/[^0-9]/", "", $texto);
         // Verifica se o CPF tem exatamente 11 dígitos
         if (strlen($texto) != 11) {
            return false;
        }
    
        $digitoUm = 0;
        $digitoDois = 0;
    
        for($i = 0, $x = 10; $i <= 8; $i++, $x--){
            $digitoUm += $texto[$i] * $x;
        }   
        for($i = 0, $x = 11; $i <=9; $i++, $x--){
            $digitoDois += $texto[$i] * $x;
        }
        $calculoUm = ($digitoUm * 10) % 11;
        if ($calculoUm >= 10) {
            $calculoUm = 0;
    
        }$calculoDois = ($digitoDois * 10) % 11;
        if ($calculoDois >= 10) {
            $calculoDois = 0;
            
        } 
     
        if ($calculoUm == $texto[9] && $calculoDois == $texto[10]){
            return true;
        }else{
            return false;
        }

        // função do texto 

    }    function validarCNPJ($texto){
        $texto = preg_replace("/[^0-9]/", "", $texto);
        
        if (strlen($texto) != 14) {
            return false;
        }
        $digitoUm = 0;
        $digitoDois = 0;
        for ($i = 5, $x = 9, $n = 0; $n <= 11 ; $n++) {
            if ($i >= 2) {
                $digitoUm += $texto[$n] * $i;
                $i--;
            } else {
                $digitoUm += $texto[$n] * $x;
                $x--;
            }
        }
        $resto = $digitoUm % 11;
        $digitoUm = $resto < 2 ? 0 : 11 - $resto;
        
        for ($i = 6, $x = 9, $n = 0; $n <= 12; $n++) {
            if ($i >= 2) {
                $digitoDois += $texto[$n] * $i;
                $i--;
            } else {
                $digitoDois += $texto[$n] * $x;
                $x--;
            }
        }
        $resto = $digitoDois % 11;
        $digitoDois = $resto < 2 ? 0 : 11 - $resto;
        if ($digitoUm == $texto[12] && $digitoDois == $texto[13]) {
            return true;
        } else {
            return false;
        }
    }
    function validartelefone ($texto){
       $ddd = array(11, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 24, 27, 28, 31, 32, 33, 34, 35, 37, 38, 41, 42, 43, 44, 45, 46, 47, 48, 49, 51, 53, 54, 55, 61, 62, 63, 64, 65, 66, 67, 68, 69, 71, 73, 74, 75, 77, 79, 81, 82, 83, 84, 85, 86, 87, 88, 89, 91, 92, 93, 94, 95, 96, 97, 98);
   
       $texto = preg_replace("/[^0-9]/", "", $texto); // somente numeros 5554987654321 
   
       $pais = substr($texto, 0, 2);
       $dddCelular = substr($texto, 2, 2);
       $dddValido = in_array($dddCelular, $ddd);
       
       if (strlen($texto) == 13 && $pais == "55" && $dddValido) {
           return true;
       }
       
       return false;
    }

}

$texto = "11.444.777/0001-61";
$mascara = "##.###.###/####-##";

$formatarDados = new FormatarDados($texto, $mascara); // instanciar o objeto
echo ($formatarDados->validarcpf($texto) ? "o cpf: " . $texto. " é valido" : "o cpf: " . $texto . " é invalido");
echo "<br>";
echo ($formatarDados->validarCNPJ($texto) ? "o cnpj: " . $texto. " é valido" : "o cnpj: " . $texto . " é invalido");
echo "<br>";
echo ($formatarDados->validartelefone($texto) ? "o Celular: " . $texto. " é valido" : "o telefone: " . $texto . " é invalido");

