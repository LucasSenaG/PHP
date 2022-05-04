<?php

$string = $_GET['numeros'];
$numeros = array();
$numeros = str_split($string, 3);
$qtd = count($numeros);
$ocorrencia = 0;
$qtd_atual = $qtd;
$temp = array();
$i = 0;
$qtd_numrpt = 0;

print_r($numeros);

for ($i = 0 ; $i <= $qtd_atual ; $i++) {
    if ($ocorrencia >= 2){
        echo '<h1>Este vetor NÃO pode ser ordenado com a retirada de apenas 1 número.</h1>';
        die();
    } else if ($ocorrencia >= 1 && $qtd_numrpt >= 1){
        echo '<h1>Este vetor NÃO pode ser ordenado com a retirada de apenas 1 número.</h1>';
        die();
    } else if ($qtd_numrpt > 1) {
        echo '<h1>Este vetor NÃO pode ser ordenado com a retirada de apenas 1 número.</h1>';
        die();
    } else if ($ocorrencia <= 1 && $i == $qtd_atual) {
        echo '<h1>Este vetor pode ser ordenado com a retirada de apenas 1 número.</h1>';
        die();
    }
    // Analisando o primeiro número
    if (reset($numeros) == $numeros[$i]) {
        if ($numeros[$i] >= $numeros[$i+1]){
            unset($numeros[$i]);
            $qtd_atual = count($numeros);
            $ocorrencia++;
        }
    }

    // Analisando o último número
    if (end($numeros) == $numeros[$i] && $i == $qtd_atual){
        if ($numeros[$i] <= $numeros[$i-1]){
            unset($numeros[$i-1]);
            $qtd_atual = count($numeros);
            $ocorrencia++;
        }
    }

    // Analisando se os números são maiores que seus sucessores
    if ($numeros[$i] != end($numeros) && $numeros[$i] != reset($numeros)){
        if ($numeros[$i] >= $numeros[$i+1] || $numeros[$i] <= $numeros[$i-1]){
            unset($numeros[$i]);
            $qtd_atual = count($numeros);
            $ocorrencia++;
        }
    }
    
    $numeros_repetidos = array_unique(array_diff_assoc($numeros, array_unique($numeros)));
    $qtd_numrpt = count($numeros_repetidos);

    echo '<br>';
    print_r($numeros);
}

?>