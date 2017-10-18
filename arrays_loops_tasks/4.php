<?php
echo 'Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.';

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

echo '<br>';
foreach ($arr as $key => $value){
    echo $key.'<br>';
}
echo '<br>';

foreach ($arr as $key => $value){
    echo $value.'<br>';
}