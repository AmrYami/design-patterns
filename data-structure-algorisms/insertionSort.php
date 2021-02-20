<?php
function insertionSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
       $val = $arr[$i];
       $j = $i - 1;
       while ($j >= 0 && $arr[$j] > $val){
           $arr[$j +1] = $arr[$j];
           $j--;
        }
        $arr[$j +1] = $val;
    }
    return $arr;
}

$sorted_numbers = insertionSort([3, 7, 1, 26, 43, 12, 6, 21, 23, 73, -1, 0]);
echo implode(' ,', $sorted_numbers);
