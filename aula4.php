<?php
/*Utilizar o laço de repetição FOR para criar a tabuada do numero informado pelo usuario.
Ex.: usuario informou o numero 4, fazer a tabuado do 4, usuario informou o 9, fazer a tabuada d0 9 e assim por diante.*/

$numero = 9; // numero que usuario informou
$resultado = "";

for ($i = 1; $i <=10 ; $i++ ) 
  { 
  
  $resultado = $numero * $i;
  echo "$numero x $i = $resultado" . "<br>";
  
  }
