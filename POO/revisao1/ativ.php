<?php
    $nome = array()
    $continente = array()
    $qtdHabitantes = array()

    for($i=0,$i!=5,$i++){
        $hold = readline("nome do pais ".$i+1.": ");
        array_push($nome,$hold);
        $hold = readline("\ncontnente do pais ".$i+1.": ");
        array_push($continente,$hold);
        $hold = readline("qtd de habitantes do pais ".$i+1.": ");
        array_push($qtdHabitantes,$hold);
    }

    $pais = array(
                'nome' => $nome,
                'continente' => $continente,
                'qtdHabitantes' => $qtdHabitantes
    )
