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
$totalA=20;
$totalB=20;
echo 'Mano a: ' . "\n";

foreach ($a as $value){
    global $a;
    if ($value == 8 or $value == 9 or $value == 10 or $value == 11 or $value == 12){
        $value = 0;
    }
        $temp=0;
        $temp=$temp + $value;
        global $totalA;
        $totalA = $totalA+$value;
        echo $value . ' ' . "\n";
}
  echo "\n" . $totalA . "\n";
echo "\n" . 'Mano b: ' . "\n";

foreach ($b as $value){
    global $b;
    if ($value == 8 or $value == 9 or $value == 10 or $value == 11 or $value == 12){
        $value = 0;
    }
        $temp=0;
        $temp=$temp + $value;
        global $totalB;
        $totalB = 20;
        $totalB = $totalB+$value;
        echo $value . ' ' . "\n";
}
 echo "\n" . $totalB . "\n";

if ($totalA > $totalB) {
    echo "\n" . 'El ganador es A';
}elseif ($totalB > $totalA){
    echo "\n" . 'El ganador es B';
}else{
    echo "\n" . 'Hubo un empate';
}