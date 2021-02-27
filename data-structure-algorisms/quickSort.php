<?php

$array = [3, 7, 1, 26, 54, 12, 6, 21, 20, 70, -1, 0, 9];
quickSort($array, 0, count($array) - 1);
//print_r($sorted);
echo implode(' ,', $array);

function quickSort(&$array, $left, $right)
{
    if ($left < $right) {
        $pivotIndex = proccessSort($array, $left, $right);
        quickSort($array, $left, $pivotIndex -1);
        quickSort($array, $pivotIndex, $right);
    }
}

function proccessSort(&$array, $left, $right){
    $pivotIndex = floor($left + ($right - $left) / 2);
    $pivotVal = $array[$pivotIndex];
    $i = $left;
    $j = $right;
    while ($i <= $j){
        while ($array[$i] < $pivotVal){
            $i++;
        }
        while ($array[$j] > $pivotVal){
            $j--;
        }
        if ($i <= $j){
            list($array[$i], $array[$j]) = [$array[$j], $array[$i]];
            $i++;
            $j--;
        }
    }
    return $i;
}