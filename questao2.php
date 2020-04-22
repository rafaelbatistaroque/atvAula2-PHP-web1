<?php
    //2. Crie um código em PHP que abra e preencha
    //um arquivo numeros.txt com os 20  primeiros números primos.

    $contadorDeNumerosPrimos = 0; $totalDeDivisores = 0; $ehNumeroPrimo = 0;
    
    $arquivoNumeros	= fopen('./data/numeros.txt',"w") or die("Incapaz de abrir o arquivo");

    while($contadorDeNumerosPrimos < 20){
        for ($i=1; $i <= $ehNumeroPrimo; $i++) { 
            if($ehNumeroPrimo % $i == 0) $totalDeDivisores++;
        }

        if($totalDeDivisores == 2){
            fwrite($arquivoNumeros, $ehNumeroPrimo."\n");
            $contadorDeNumerosPrimos++;
        }
        $totalDeDivisores = 0;
        $ehNumeroPrimo++;
    }
    fclose($arquivoNumeros); 
?>