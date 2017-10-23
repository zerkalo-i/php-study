<?php

$a = 45;
$b = 64;

//fierst way

if ($a > $b)
    echo $a;
    else
        echo $b;


    echo "<br>";

//sekond way

switch ($a > $b){
    case 1:
        echo $a;
        break;
    case 0:
        echo $b;
        break;
}
