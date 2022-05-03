<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $num = $n1 + $n2;
    $numerosTotais = range($n1, $n2);
    $qtd = count(range($n1, $n2));

    $divisores = null;
    for($x = 0; $x < $qtd; $x++){
        for($count=2; $count<$numerosTotais[$x]; $count++){
            if($numerosTotais[$x] % $count == 0){
            $divisores++;
            }     
        }      
        if ($divisores) {
           echo $numerosTotais[$x] . " Não é primo!<br>";
           $divisores = null;
        }
        else {
            echo $numerosTotais[$x] . " É primo!<br>";
            $divisores = null;
        }
    }

?>