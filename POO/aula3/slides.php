<?php
    func atv1(){
        $num =  readline("Um numero > 0: ");
        while($num>0){
            $fatorial = 1;
            for($i = 1; $i <= $num; $i++){
                $fatorial = $i*$fatorial;
            }
            $num = readline("\nSeu fatorial e $fatorial\nUm numero (se for 0 ou menor, 
            o programa acaba");
        }
    }
    func atv2(){
        $raio = readline("Escreva o raio de um circulo: ");
        $area = $raio*$raio*3.14;
        $circunferencia = $raio*3.14*2;
        print("\nA area dele eh de $area e a circunferencia e de $circunferencia")
    }
