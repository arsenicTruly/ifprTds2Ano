<?php
function calcularArea($retangulo) {
    return $retangulo['base'] * $retangulo['altura'];
}

$retangulos = array();

for($i = 0; $i < 5; $i++) {
    $j = $i + 1;
    $base = (int)readline("Base do retângulo $j: ");
    $altura = (int)readline("Altura do retângulo $j: ");
    
    $retangulos[] = array(
        'base' => $base,
        'altura' => $altura
    );
}

echo "\nÁreas dos retângulos:\n";
foreach($retangulos as $indice => $retangulo) {
    $area = calcularArea($retangulo);
    echo "Retângulo " . ($indice + 1) . ": Área = " . $area . "\n";
}
?>
