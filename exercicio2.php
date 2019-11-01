<?php

    $valor1 = $_GET["primeiro"];
    $valor2 = $_GET["segundo"];

    for($i=$valor1; $i<$valor2; $i++){
        echo $i;
        echo "<br>";
    }