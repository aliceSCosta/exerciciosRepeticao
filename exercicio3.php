<?php

    $valor1 = $_GET["primeiro"];
    $valor2 = $_GET["segundo"];

    for($i=0; $i<$valor2; $i++){
        $resultado = $i + $valor1 + $valor2;
    }
    echo $resultado;