<?php

function mergeSort($arr)
{
    $countArr = count($arr);
    if ($countArr == 1)
        return $arr;
    $mid = ceil($countArr) / 2;
    $left = mergeSort(array_slice($arr, 0, $mid));
    $right = mergeSort(array_slice($arr, $mid));
    return mergeProccess($left, $right);
}

function mergeProccess($left, $right)
{
    $merge = [];
    $totalLeft = count($left);
    $totalRight = count($right);
    $indexR = $indexL = 0;
    while ($indexL < $totalLeft && $indexR < $totalRight) {
        if ($left[$indexL] > $right[$indexR]) {
            $merge[] = $right[$indexR];
            $indexR++;
        } else {
            $merge[] = $left[$indexL];
            $indexL++;
        }
    }

    while ($indexL < $totalLeft) {
        $merge[] = $left[$indexL];
        $indexL++;
    }
    while ($indexR < $totalRight) {
        $merge[] = $right[$indexR];
        $indexR++;
    }
    return $merge;
}
$sorted = merge_sort([3, 7, 1, 26, 54, 12, 6, 21, 20, 70, -1, 0, 9]);
//print_r($sorted);
echo implode(' ,', $sorted);