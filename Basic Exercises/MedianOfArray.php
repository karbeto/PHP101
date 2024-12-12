<?php
function median($arr)
{
    sort($arr);  

    $count = count($arr);
    $mid = floor($count / 2);  

    if ($count % 2 == 0) {
        return ($arr[$mid - 1] + $arr[$mid]) / 2;
    } else {
        return $arr[$mid];
    }
}

$arr1 = [1, 3, 3, 6, 7, 8, 9];
$arr2 = [2, 2, 3, 5, 6, 8, 8, 9];


echo median($arr1);
echo '<br/>';
echo median($arr2);