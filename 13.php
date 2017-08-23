<?php
/*13. Заданы две переменные: s - длина участка, который проехал автомобиль;
 *t - время движения в часах.
 * Вывести скорость автомобиля на заданном участке в км/час и в м/сек
 * */

$length_road = 380;
$time = 4.5;

$speed1 = $length_road / $time;

echo round($speed1);
echo " км/ч";

echo "</br>";

$length_road_m = $length_road * 1000;
$time_s = $time * 60;

$speed2 = $length_road_m / $time_s;

echo round($speed2);
echo " м/сек";
