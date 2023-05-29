<?php

// $nomes  = [
//   'joão' , 'ana' , 'joaquim'
// ];

// $final = array_map("saudacao", $nomes);

// print_r($final);

// function saudacao($valor){

//   return "Olá, $valor";

// };

// saudacao($nomes);

$valores = [1,2,3,4,5,6,7,8,9,10];
$final = array_map("elevar_ao_quadrado", $valores);
print_r($final);

function elevar_ao_quadrado($valor){
  return $valor * $valor;
}