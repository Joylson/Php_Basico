<?php
    $bolo = [];

    $bolo[] = 1;
    $bolo[] = 2;
    $bolo[1] = 3;
    $bolo[] = [1,2];
    
    foreach($bolo as $key => $item){
        if(gettype($item) != "array"){
            echo $item;
        }else{
            foreach($item as $key2 => $item2){
                echo $item2;
            }
        }    
    }
?>