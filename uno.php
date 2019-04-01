<?php
$colection = array (1,2,3,4,5,6,7,8,9,10);

function mostrar($colection){
    foreach ($colection as $colection) 
        echo $colection . " ";
    }
$array2=mostrar($colection);
arsort ($colection);
echo "\n";
echo mostrar($colection);