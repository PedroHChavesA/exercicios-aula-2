<?php

function IMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) 
    {
        return "Magreza";
    } 
    
    else if ($imc >= 18.5 && $imc <= 24.9) 

    {
        return "Normal";

    } else if ($imc > 24.9 && $imc <= 30) 

    {
        return "Sobrepeso";
    } else 
    
    {
        return "Obesidade";
    }
}

echo IMC(94, 1.83);