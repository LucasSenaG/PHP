<?php
    $ano = $_GET["ano"];
    $resultado = SeculoAno($ano);
    echo "O ano $ano é do século: $resultado";

    function SeculoAno($ano){
        if (strlen($ano) != 4){
            echo "Por favor insira um ano com 4 dígitos. Ex: 2022 ou 0305"; 
            die();
        }
        $digitos = substr($ano, 0, 2);
        $resultado = $digitos + 1; 
        if(substr($ano, -2) == '00'){
            $resultado = $digitos;
        }
        
        return $resultado;
    }
?>

