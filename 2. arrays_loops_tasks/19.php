<?php
echo '<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. 
Текущий день должен храниться в переменной $day.</p><br><br><br>';

$calendar = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = date("l");

foreach ($calendar as $d){
    if ($d == $day){
        echo "<i>$d</i><br>";
    }

    else {
        echo $d . '<br>';
    }
}