<?php

salarioajustado(5000);

function salarioajustado($salario) {
    if ($salario < 3000) {
        $reajuste = $salario * 0.5;
    } else {
        $reajuste = $salario * 0.3;
    }
    $novoSalario = $salario + $reajuste;
    echo "O salário reajustado é R$ " . number_format($novoSalario, 2, ',', '.');
}
