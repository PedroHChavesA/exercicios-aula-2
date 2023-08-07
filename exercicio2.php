<?php 

$nota = resultado(2, 3);

function resultado($n1, $n2) {
    $soma = $n1 + $n2;
    if ($soma >= 19 && $n1 > 7 && $n2 > 7) {
        return "aprovado";
    } else {
        return "reprovado";
    }
}

echo $nota;