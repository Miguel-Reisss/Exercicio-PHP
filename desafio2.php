<?php

    $valor1 = "10";
    $valor2 = "5";
    $soma = $valor1 + $valor2;
    

    // garantir que os valores sejam validos como números
    if (is_numeric($valor1) && is_numeric($valor2)) {
        $soma = $valor1 + $valor2;
        echo "Resultado da soma: $soma";
    } else {
        echo "Erro: Ambos os valores devem ser numéricos.";
    }


?>
