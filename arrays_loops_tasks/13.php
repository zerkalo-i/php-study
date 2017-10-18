<?php
//Вывести таблицу умножения
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$len = count($arr);

$html = '<table><tr><td>/</td>';

foreach ($arr as $key => $item){
    $html .= '<td>'.$item.'</td>';
}

for ($i = 0; $i < $len; $i++){
    $html .='<tr><td>'.$arr[$i].'</td>';
    for ($j = 0; $j < $len; $j++){
        $result = $arr[$i]*$arr[$j];
        $html .= '<td>'.$result.'</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';
echo $html;
echo '<br>';

$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$len2 = count($arr);
$html2 = '<table><tr><td>/</td>';
foreach ($arr2 as $key2 => $item2){
    $html2 .= '<td>'.$item2.'</td>';

}
$html2 .= '</tr>';
/*while ($key2 < $len2){
    $html2.='<tr><td>'.$item2.'</td>';
    $html2 .= '</tr>';
}*/
$html2 .= '</table>';
echo $html2;