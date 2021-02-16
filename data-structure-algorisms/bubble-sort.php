<?php

function bubble_sort($arr){
    $size = count($arr);
    for ($i =0 ;$i < $size; $i++){
        $swapped = false;
        for ($n = 0; $n < $size - $i - 1; $n++){
            if ($arr[$n] > $arr[$n+1]){
                $swap = $arr[$n];
                $arr[$n] = $arr[$n+1];
                $arr[$n+1] = $swap;
                $swapped = true;
            }
        }
        if ($swapped == false)
            break;
    }
    return $arr;
}
$arr = [90,50,45,87,85,63,25,68,12,22,11,44];
$len = sizeof($arr);
$arr = bubble_sort($arr);
echo implode(' ', $arr);


echo '<br>';

function bubbleSort($arr){
    do{
        $swapped = false;
        for ($i = 0, $size = count($arr) -1; $i < $size; $i++){
            if ($arr[$i] > $arr[$i+1]){
                list($arr[$i + 1], $arr[$i]) = [$arr[$i], $arr[$i+1]];
                $swapped = true;
            }
        }
    }while($swapped);
        return $arr;

}

$array = [90,50,45,87,85,63,25,68,12,22,11,44];
$res = bubbleSort($array);
echo implode(' ',$res);