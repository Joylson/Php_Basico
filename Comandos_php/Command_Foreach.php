<?php
    $vet = array(0,1,2,3,4,5,6,7,8,9,10);

    echo "<h1>Crecente</h1>";
    foreach($vet as $item){
        echo "Numero: ", $item, "<br/ >";
    }

    echo "<h1>Crecente Key</h1>";
    foreach($vet as $key => $item){
        echo "Numero: ", $vet[$key], "<br/ >";
    }
    
?>