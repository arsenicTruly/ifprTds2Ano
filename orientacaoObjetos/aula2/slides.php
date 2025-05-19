<?php
    $i 
    = 
    1
    ;
    echo
    "while: "
     ;
    while($i<11){
        
    echo("$i ");
        $i++;
    }

    $i = 1;
    echo"\ndo: ";
    do{
        echo("$i ");
        $i ++;
    }while ($i < 11);

    echo "\nfor: ";
    for($i = 1; $i < 11; $i++){
        echo"$i ";
    };
    echo "\n";

    echo "\nprograma de percorrer lol";
    $coiso = 0;
    for($i = 0; $i <101; $i++){
        $coiso += $i;
    };
    print "\n$coiso";
    echo"\n";

    echo "\nnumeros de 1 a 50 divisiveis por 3: ";
    for($i=1; $i<50; $i++){
        if($i % 3 == 0){
            echo"$i ";
        }
    }



