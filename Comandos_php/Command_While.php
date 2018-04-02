<?php
    $acumC =0;

    echo "<h1>Crecente</h1>";
    while($acumC <= 10){
        echo "Numero: ", $acumC , "<br/ >";
        $acumC++;
    }

    $acumD = 10;
    echo "<h1>Decrecente</h1>";
    while($acumD >= 0){
        echo "Numero: ", $acumD , "<br/ >";
        $acumD--;
    }
?>