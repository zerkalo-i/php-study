<?php
include '15_calc.html';

$a = $_POST ['a'];
$b = $_POST ['b'];
$operator = $_POST['operator'];

/*if ($b == 0 and $operator =='delenie'){
    echo "на 0 делить нельзя";
}else {
    if ($operator == 'plus') {$result = $a + $b; }
    if ($operator == 'minus') {$result = $a - $b;}
    if ($operator =='delenie')  {$result = $a / $b;}
    if ($operator == 'umnojenie') {$result = $a * $b;}
    echo $a . $operator . $b .'='  . $result;
}*/
echo $a;
var_dump($b);
print_r($operator);
print_r($_POST);