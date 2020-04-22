<?php
    //1. Crie um código em PHP que definidas duas matrizes quadradas $a e $b,
    //de mesmo tamanho, efetue a multiplicação dessas matrizes.
    $a = array(
        array(5,7),
        array(1,3),
    );
    $b = array(
        array(9,4),
        array(2,8),    
    );
    for ($indexMatrizA=0; $indexMatrizA < count($a); $indexMatrizA++) { 
        for ($indexMatrizB=0; $indexMatrizB < count($b); $indexMatrizB++) { 
            echo "Resultado = ".
                $a[$indexMatrizA][$indexMatrizB]." x ".
                $b[$indexMatrizA][$indexMatrizB]." = ".
                $a[$indexMatrizA][$indexMatrizB] * $b[$indexMatrizA][$indexMatrizB].
                "<br>";
        }
    }   
?>