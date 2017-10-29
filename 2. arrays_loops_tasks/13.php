<?php
//Вывести таблицу умножения
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$len = count($arr);

$html = '<table><tr><td>/</td>';

foreach ($arr as $key => $item){
    $html .= '<td style="background-color: grey;">'.$item.'</td>';
}

for ($i = 0; $i < $len; $i++){
    $html .='<tr><td style="background-color: grey;">'.$arr[$i].'</td>';
    for ($j = 0; $j < $len; $j++){
        $result = $arr[$i]*$arr[$j];
        $html .= '<td style="border: blue 1px solid">'.$result.'</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';
echo $html;
echo '<br>';


