<?php
//3. Crie um código em PHP que abra o arquivo numeros.txt coloque os números
//desse arquivo em um array. Percorra o array e some todos os valores
   
    $arquivoNumeros	= fopen('./data/numeros.txt',"r") or die("Incapaz de abrir o arquivo");
    
    $i = 0; $somaArray = 0;
    while(!feof($arquivoNumeros)){
        $arrNumeros[] = (int)fgets($arquivoNumeros);
        $somaArray += $arrNumeros[$i];
        $i++;
    }
    echo $somaArray;
    fclose($arquivoNumeros); 
?>