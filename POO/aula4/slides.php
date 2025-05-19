<?php

    function ativ2(){
        $tabela = array(
            "nomes" => array("Nome","Manuel de Medeiros","Juliana de Amaral","Rodrigo Baidek","Fabio da Silva"),
            "endereco" => array("Endereco","Rua das Acacias","Rua dos Pinheiros", "Rua Dom Pedro I", "Rua Chile"),
            "cidade" => array("Cidade","Foz do Iguacu","Florianopolis","Petropolis","Guarulhos"),
            "uf" => array("UF","PR","SC","RJ","SP"),
        );
        $linhas = 5;
        $i = 0;
        do{
            foreach($tabela as $colunas){
            print "$colunas[$i] | ";
            }
            print"\n";
            $i++;
        }while($i!=$linhas);
    }
    ativ2();
    function ativ1(){
        $a = array(1,2,3,4,5);
        $b = array('a','b','c','d','e');
        $c = array(0,1.1,2.2,3.3,4.4);
        $d = array("ola","mundo","!","!","!");
    
        laco($a);
        laco($b);
        laco($c);
        laco($d);
        }
    function laco($array){
        $i = 0;
        foreach($array as $elemento){
            $i ++;
        }
        $count = 0;
        foreach($array as $elemento){
            print $elemento;
            $count ++;
            if($count != $i){
                print " | ";
            }
            else{
                print "\n";
            }
        }
        
    }
