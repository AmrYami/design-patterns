<?php
function buildHeap(&$array, $i, $t){
    $tmp_var = $array[$i];
    $j = $i * 2 + 1;

    while ($j <= $t)  {
        if($j < $t)
            if($array[$j] < $array[$j + 1]) {
                $j = $j + 1;
            }
        if($tmp_var < $array[$j]) {
            $array[$i] = $array[$j];
            $i = $j;
            $j = 2 * $i + 1;
        } else {
            $j = $t + 1;
        }
    }
    $array[$i] = $tmp_var;
}

function heapSort(&$array) {
    // heapify array
    $init = (int)floor((count($array) - 1) / 2);
    $count = count($array) - 1;
    for($i=$init; $i >= 0; $i--){
        buildHeap($array, $i, $count);
    }
    //swap nodes
    for ($i = (count($array) - 1); $i >= 1; $i--)  {
        list($array [0],$array [$i] ) = [$array [$i],$array [0]];
        buildHeap($array, 0, $i - 1);
    }
}

$array = array(9,6,5,44,12,2,11,0,10,500,0,-1,1,8,7);
heapSort($array);
print_r($array);


