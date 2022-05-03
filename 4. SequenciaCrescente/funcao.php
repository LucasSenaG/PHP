<?php

$string = $_GET['numeros'];
$numeros = array();
$numeros = str_split($string);
$qtd = count($numeros);
$ocorrencia = 0;
$qtd_atual = $qtd;
$temp = array();

print_r($numeros);

for ($i = 0 ; $i <= $qtd ; $i++) {
    if ($ocorrencia == 2){
        echo '<h1> 1. Este vetor não pode ser ordenado com a retirada de apenas 1 número.</h1>';
        die();
    }

    if ($numeros[$i] != end($numeros)){
        echo '<br> Numero analisado ' . $numeros[$i];
        echo '<br> Contador em: ' . $i;

        if ($numeros[$i] >= $numeros[$i+1] || $numeros[$i] <= $numeros[$i-1]){
            // this.excluiNumero($numeros[$i]);
            echo '<br>O número ' . $numeros[$i] . ' é maior ou igual ao seu sucessor<br>';
            $ocorrencia++;
            $temp[$i] = $numeros[$i];
            unset($numeros[$i]);
            print_r ($numeros);
            echo '<br>Exclusão do número incorreto<br>';
            echo 'Array auxiliar ';
            print_r ($temp);
            $qtd_atual = count($numeros);
            echo '<br>Quantidade de valores no array: ' . $qtd;
        }
    } else if ( $numeros[$i] >= end($numeros) && $qtd_atual == $i) {
        echo 'Analisando os últimos números.';
        echo '<br> Contador em: ' . $i;
        if ($numeros[$i] < end($numeros)-1){
            $ocorrencia++;
            $temp = $numeros[$i];
            unset($numeros[$i]);
            print_r($numeros);
            echo '<br>';
        } else {
            echo '<h1> Este vetor pode ser ordenado com a retirada de apenas 1 número.</h1>';
            print_r ($numeros);            
            die();
        }

    }  

    if ($numeros[$i] == end($numeros) && $numeros[$i] <= $numeros[$i-1]){
        // excluiNumero($numeros[$i]);
        echo '<br> Numero analisado ' . $numeros[$i];
        echo '<br> Contador em: ' . $i;
        echo '<br>O número ' . $numeros[$i] . ' é menor ou igual ao seu antecessor<br>';
        $ocorrencia++;
        $temp[$i] = $numeros[$i];
        unset($numeros[$i]);
        print_r ($numeros);
        echo '<br>Exclusão do número incorreto<br>';
        echo 'Array auxiliar ';
        print_r ($temp);
        $qtd_atual = count($numeros);
        echo '<br>Quantidade de valores no array: ' . $qtd_atual;
    }   

    echo '<br> Ocorrencia ' . $ocorrencia;


    if ($ocorrencia >= 2){
        echo '<h1> 2. Este vetor não pode ser ordenado com a retirada de apenas 1 número.</h1>';
        die();
    } 
    
    if ($ocorrencia <= 1 && $i == $qtd_atual){
        echo '<h1> Este vetor pode ser ordenado com a retirada de apenas 1 número.</h1>';
        print_r ($numeros);
        die();
    }

    echo '<h3>Próximo número</h3>';
}

// function excluiNumero($numeros){
//     echo '<br>O número ' . $numeros[$i] . ' é maior ou igual ao seu sucessor<br>';
//     $ocorrencia++;
//     $temp[$i] = $numeros[$i];
//     unset($numeros[$i]);
//     print_r ($numeros);
//     echo '<br>Exclusão do número incorreto<br>';
//     echo 'Array auxiliar ';
//     print_r ($temp);
//     $qtd_atual = count($numeros);
//     echo '<br>Quantidade de valores no array: ' . $qtd;
//     return null;
// }

?>