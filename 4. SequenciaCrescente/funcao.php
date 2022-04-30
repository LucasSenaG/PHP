<?php

$string = $_GET['numeros'];
$numeros = array();
$numeros = str_split($string);
$qtd = count($numeros);
$ocorrencia = 0;

// $c_numeros = $numeros;
// usort($c_numeros, "strnatcmp");

// print_r($numeros);
// echo "\n";
// print_r($c_numeros);



for($i=0 ; $i<$qtd; $i++){
        if ($ocorrencia >= 2) {
            print 'O vetor não pode ser ordenado com a retirada de um número.<br>';
            print_r($numeros);
            die();
        } if (end($numeros) == $numeros[$i] && $ocorrencia == 2){
            print 'O vetor não pode ser ordenado com a retirada de um número.<br>';
            print_r($numeros);
            die();
            if (end($numeros) == $numeros[$i]){
                if($numeros[$i] >= end($numeros) && $i == $numeros[$qtd-1]){
                    // unset($numeros[$i]);
                    $ocorrencia++; 
                    $i--;
                }
                    if($ocorrencia >= 2){
                        print 'O vetor não pode ser ordenado com a retirada de um número.<br>';
                        print_r($numeros);
                        die();
                    } else {
                        print 'O vetor pode ser ordenado com a retirada de um número.<br>';
                        print_r($numeros);
                        die();
                    }
            } 
        } if($numeros[$i] >= $numeros[$i+1]){
            // unset($numeros[$i]);
            $ocorrencia++; 
            $i--; 
        }  if($ocorrencia <= 1 && $i == $qtd){
            print 'O vetor pode ser ordenado com a retirada de um número.<br>';
            print_r($numeros);
            die();
        } 
        
}  


?>