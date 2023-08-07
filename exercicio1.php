<?php

$resultado = soma(30, 10);

function soma($a, $b) {
    $soma = $a + $b;
    if ($soma < 0) {
        return 0;
    } else {
        return $soma;
    }
}

echo $resultado;