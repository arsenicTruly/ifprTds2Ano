<?php
    func atv1(){
        $num[0] = readline("Um numero: ");
        for($i = 0; $i < 6; $i++){
            $x = $num[$i];
            print("\nf($x) = 5x+2x+3: ");
            print((5*$x)+(2*$x)+3);
            print("\n");
        }
    }
    func atv2(){
        $base = readline("Qual a base do teu retangulo? ");
        $altura = readline("\nQual a altura dele? ");
        $area = $base*$altura;
        $perimetro = (2*$base)+(2*$altura);
        print("\nA area dele eh de $area cm^2 e o perimetro e de $perimetro cm");
    }
    func atv3($nome, $habitantes, $area, $altitude, $estado){
        print("$nome | $habitantes | $areakm^2 | $altitudem | $estado");
    }
    func atv4(){
        $a = readline("Me de um numero: ");
        $b = readline("Me de outro numero ");
        $c = readline("\nOutro: ");
        $media = (($a*3)+($b*5)+($c*2))/10;
        print("\nSua media e $media");
    }
    func atv5(){
        $numero = readline("Me de um numero ");
        print("Seus divisores sao:");
        for($i = $numero - 1; $i > 1; $i --){
            if(divisaoExata($numero, $i)){
                print(" $i,");
            }
        }
        print(" e 1.");

        
    }
    func divisaoExata($dividendo, $divisor){
        if($dividendo%$divisor == 0){
            $retorno = true;
        }
        else{
            $retorno = false;
        };
        return $retorno;
    }
