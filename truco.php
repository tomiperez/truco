<?php

function random(){

    return array(
        rand (1,12),
        rand (1,12),
        rand (1,12)
    );
}


$a = random();
$b = random();

echo 'Mano a: ' . "\n";
foreach ($a as $value){
    global $a;
    if ($value == 8 or $value == 9 or $value == 10 or $value == 11 or $value == 12){
        $value = 0;
    }
        
        $totalA = 20+$value;
        echo $value . ' ' . "\n";
        // echo $temp;
}
  echo "\n" . $totalA . "\n";
echo "\n" . 'Mano b: ' . "\n";
foreach ($b as $value){
    global $b;
    if ($value == 8 or $value == 9 or $value == 10 or $value == 11 or $value == 12){
        $value = 0;
    }
        $totalB = 20+$value;
        echo $value . ' ' . "\n";
        // echo $temp;
}
 echo "\n" . $totalB . "\n";

if ($totalA > $totalB) {
    echo "\n" . 'El ganador es A';
}elseif ($totalB > $totalA){
    echo "\n" . 'El ganador es B';
}else{
    echo "\n" . 'Hubo un empate';
}