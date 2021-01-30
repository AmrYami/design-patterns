<?php
function implementBinarySearch($array, $val)
{
    if (count($array) === 0) return false;
    $min = 0;
    $max = count($array) - 1;
    while ($min <= $max) {
        $mid = ceil(($min + $max) / 2);
        if ($val == $array[$mid]) return true;
        if ($val < $array[$mid])
            $max = $mid - 1;
        else
            $min = $mid + 1;
    }
    return false;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
echo implementBinarySearch($array, 20) ? 'found' : 'not found';
echo '<br><br><br><br>Recursive function <br>';
// using recursive function
function implementRecursiveBinarySearch($array, $min, $max, $val)
{
    if ($min > $max) return false;

    $center = ceil(($min + $max) / 2);
    if ($array[$center] == $val) return true;

    if ($array[$center] > $val)
        return implementRecursiveBinarySearch($array, $min, $center - 1, $val);
    else
        return implementRecursiveBinarySearch($array, $center + 1, $max, $val);
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
echo implementRecursiveBinarySearch($array, 0, count($array) - 1, 8) ? 'found' : 'not found';