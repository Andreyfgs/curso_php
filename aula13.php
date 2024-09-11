<?php

/**
 * criar por meio de objeto as operações matematicas + - * /
 */

class Calculadora {
    
    public $resultado =0;
    
    public Function adicao($valor1 , $valor2){
        $this->resultado= $valor1 + $valor2;
    }
    public function subtrair($valor1 , $valor2){
        $this->resultado= $valor1 - $valor2;
    }
    public function divisao($valor1 , $valor2){
        $this->resultado= $valor1 / $valor2;
    }
    public function multiplicacao($valor1 , $valor2){
        $this->resultado= $valor1 * $valor2;
    }
    public function __toString()
    {
        return $this->resultado;
    }
}

$calculadora = new calculadora();

$calculadora->adicao(10,10);
echo $calculadora->resultado;
// echo $calculadora 
