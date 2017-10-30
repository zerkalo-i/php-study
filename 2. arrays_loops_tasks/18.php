<?php
echo '<p>18. Составьте массив дней недели. 
С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.</p><br><br><br>';

$calendar = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

foreach ($calendar as $l){
    if ($l == 'Saturday'){
        echo "<b>$l</b><br>";
    }
    elseif ($l == 'Sunday'){
        echo "<b>$l</b><br>";
    }
    else {
        echo $l . '<br>';
    }
}