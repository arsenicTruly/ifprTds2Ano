<?php
    //um programa que imprima 10 numeros de 2 em 2
    print "Um programa que imprima 10 numeros, iniciando de 1 e pulando de 2 em 2. \n";
    $numero = 1;
    for($i = 0; $i < 10; $i++){
        print "$numero, ";
        $numero += 2;
    }
    print "$numero.\nFim do algoritimo.\n";

    //5+3 dez vezes
    print "\nConsidersndo um numero N=5 e uma razao R=3, crie um programa que imprima a 
    sequencia de progressao aritimetica de N contendo 10 valores. A sequencia aritmetica inicia 
    em N, sendo os demais valores calculados somando o termo anterior com a razao.\n";
    $n = 5;
    for($i = 0; $i < 10; $i ++ ){
        print "$n, ";
        $n += 3;
    }
    print "$n.\nFim do algoritimo.\n";

    //anos bissextos entre 1980 e 2024 
    //ano % 4 = 0; ano % 100 != 0 ou ano % 400 = 0
    print "\nFaca um programa que imprima os anos bissextos que existem entre os anos 1980 e 2024. 
    Para um ano ser bissexto, o mesmo deve se enquadrar em uma das seguintes regras:
    \n -Ser divisivel por 4 e nao divisivel por 100.\n -Ser divisivel por 4 e divisivel por 400\n";
    for ($i = 1980; $i < 2024; $i ++){
        if(($i%4==0) and (($i % 100 != 0) or ($i % 400 == 0)))
        {
            print("$i, ");
        }
    }
    print ("$i.\nFim do Algoritimo.\nFim do codigo.\n");

?>
