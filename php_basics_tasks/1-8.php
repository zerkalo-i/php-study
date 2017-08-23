<?php

$name = "Таня";
$age = "37";

echo "Меня зовут $name";
echo '<br>';
echo "Мне $age лет" ;

echo '<br>';
if ($age >= 18 and $age <= 59){
    echo "Вам еще работать и работать";
}
 elseif ($age > 59) {
    echo "Вам пора на пенсию";
 }
 elseif ($age > 0 and $age < 18){
    echo "Вы еще слишком молоды для работы";
 }
 else {
    echo "Неизвестный возраст";
 }
