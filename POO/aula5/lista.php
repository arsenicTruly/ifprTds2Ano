<?php 
        $vetor = array();
        for($i = 0, $i != 5, $i++){
            array_push($vetor, readline("\nme de o numero de posicao $i: "));
        };

        $a = array();
        foreach($vetor as $celcius){
            $farenheint = (($celcius*1,8)+32);
            array_push($a, $farenheint);
        };
        
        $b = array();
        foreach($vetor as $fatorando){
            if($fatorando >= 1){
                $fatoral = 1;
                for($i = $fatorando, $i > 0, $i --){
                    $fatoral = $fatoral*$i;
                }
            }
            else{
                $fatoral = 0;
            }
            array_push($b, $fatoral);
        };
        
        $c = array();
        foreach($vetor as $x){
            $retorno = (($x*$x)+(2*$x)+4)/2*$x;
        };
