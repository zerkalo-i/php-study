<?php
echo '<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
    рядов, а не 5.<br><br>
    x<br>
    xx<br>
    xxx<br>
    xxxx<br>
    xxxxx</p><br><br><br>';

$pir = 'x';
$i = 0;

while ($i <= 20){
    echo $pir . '<br>';
    $pir .= 'x';
    $i++;
}