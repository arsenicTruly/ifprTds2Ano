<?php
    function ativ1(){
        print "atividade 1:\n";
        $lista = array();
        for($i = 1; $i != 11; $i++)
        {
            $input = intval(readline("\nnumero na posicao $i: "),10);
            array_push($lista,$input);
        }
        $soma = array_sum($lista);
        $media = $soma/10;
        print"Media: $media\n";
    };
    function ativ2(){
        $palavras = array();
        for($i = 1; $i != 6; $i ++){
            $input = readline("\nme diga a palavra numero $i: ");
            array_push($palavras,$input);  
        };
        $nulo = array();
        foreach($palavras as $p){
            array_push($nulo,$p);
        };
        foreach($nulo as $es){
            print "$es, ";

        };
        print"\n";
    };
    function ativ3(){
        $a = array(1,34,5,67,7);
        $b = array(34,56,776,78,0);
        $c = array_intersect($a,$b);
        foreach($c as $p){
            print"$p | ";
        };
            print"\n";
        $d = array_merge($a,$b);
        foreach($d as $print){
            print "$print | ";
        };
        print"\n";
    };
    function ativ4(){
        $lista = array();
        for($i = 1; $i != 11; $i++)
        {
            $input = intval(readline("\nnumero na posicao $i: "),10);
            array_push($lista,$input);
            
        }
        $menor = $lista[0];
        $maior = $lista[0];
        foreach($lista as $num){
            if($menor>$num){
                $menor=$num
            }
            if($maior<$num){
                $maior=$num
            }
        }
        print"maior: $maior\nmenor: $menor\n"
    }
    function ativ5(){
        $pessoas = array();
        for ($i = 0; $i < 4; $i++) {
            echo "Digite os dados da pessoa " . ($i + 1) . ":\n";
            
            $nome = readline("Nome: ");
            $idade = intval(readline("Idade: "));
            $cidadeNatal = readline("Cidade Natal: ");
            $profissao = readline("Profissão: ");

            $pessoa = array(
                'nome' => $nome,
                'idade' => $idade,
                'cidadeNatal' => $cidadeNatal,
                'profissao' => $profissao
            );
            $pessoas[] = $pessoa;
        }
        $pessoaMaisVelha = $pessoas[0];
        foreach ($pessoas as $pessoa) {
            if ($pessoa['idade'] > $pessoaMaisVelha['idade']) {
                $pessoaMaisVelha = $pessoa;
            }
        }
        echo "\nDados da pessoa mais velha:\n";
        echo "Nome: " . $pessoaMaisVelha['nome'] . "\n";
        echo "Idade: " . $pessoaMaisVelha['idade'] . "\n";
        echo "Cidade Natal: " . $pessoaMaisVelha['cidadeNatal'] . "\n";
        echo "Profissão: " . $pessoaMaisVelha['profissao'] . "\n";
    }