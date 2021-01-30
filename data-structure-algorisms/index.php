<?php
$a = 1;
$b = &$a;
$b = "2$b";
echo $a . ', ' . $b;// 21 , 21
echo '<br>';
echo (int)'1b';// remove strings
echo '<br>';
echo (string)'1b';// print all
echo '<br>';
var_dump('1e2' == 100);// true

echo '<br>foofoo<br>';
function foo($val)
{
    if ($val < 0)
        return;
    echo 'begin ' . $val . '<br>';// 3 2 1 0
    foo($val - 1);
    echo 'end ' . $val . '<br>';
}

foo(3);
//when we put return;
//first step echo 3 and push to stack 3
//second step echo 2 and push to stack 2
//third step echo 1 and push to stack 1
//forth step echo 0 and push to stack 0 stack last in first out
//then pop from stack and echo 0
//then pop from stack and echo 1
//then pop from stack and echo 2
//then pop from stack and echo 3
echo '<br>array_merge<br>';
function arrayMerge(array $arr, array $arr2): array
{
    $result = [];
    foreach ($arr as $key => $value) {
        $result[$key] = $value;
    }
    foreach ($arr2 as $key => $value) {
        $result[$key] = $value;
    }
    return $result;
}

$arr1 = ['key' => 1, '2'];
$arr2 = ['key' => 'one', 'two'];
$res = arrayMerge($arr1, $arr2);
echo '<pre>';
print_r($res);
print_r(array_merge($arr1, $arr2));
echo '<br>missing number<br>';
function missingNumber($val)
{
    $range = range(min($val), max($val));
    $var = array_diff($range, $val);
    return $var;
}

$arrr = [1, 2, 3, 5, 6, 7, 8];
print_r(current(missingNumber($arrr)) ?? null);
echo '<br>';
$n = count([1, 2, 3, 5, 6, 7, 8]);
echo (($n + 1) * ($n + 2)) / 2;
echo '<br>';
echo '<br>find odd occurence<br>';
//find odd occurence

$arrr = [1, 1, 2, 3, 3, 5, 5, 6, 7, 8];
function findOddOccurance(array $arrr)
{
    $countValues = array_count_values($arrr);
    foreach ($countValues as $element => $count) {
        if ($count % 2 != 0)
            return $element;
    }
}

print_r(findOddOccurance($arrr));
echo '<br><br>falsy pipe<br>';
$check = '' | 'no data';
echo $check;
echo '<br>2 elements whose sum is equal<br>';
function hasArrayTwoCandidates($arr, $sum)
{
    $arr_size = count($arr);
    sort($arr);
    $l = 0;
    $r = $arr_size - 1;
    while ($l < $r) {
        $sumValues = $arr[$l] + $arr[$r];
        if ($sumValues == $sum)
            return $arr[$l] . ':::' . $arr[$r];
        else if ($sumValues < $sum)
            $l++;
        else // A[i] + A[j] > sum
            $r--;
    }
    return false;
}

$arr = array(-8, 1, 4, 6, 8, 10, 45);
$n = 0;
$res = hasArrayTwoCandidates($arr, $n);
print_r($res);


echo '<br>square<br>';
echo 3 ** 2; //square
echo '<br>falsy pipe<br>';
print_r(array_unique([1, 3, 2, 1, 2], SORT_REGULAR));
echo '<br>add digits<br>';
function addDigits($num)
{
    $root = 0;
    while ($num > 0) {
        $root += $num % 10;
        $num = $num / 10;
        if ($num == 0 && $root > 9) {
            $num = $root;
            $root = 0;
        }
    }
    return $root;
}

echo addDigits(12331542);
echo '<br>addDigitsInhance<br>';
function addDigitsInhance($num)
{
    return 1 + ($num - 1) % 9;
}

echo addDigitsInhance(12331542);
echo '<br>falsy pipe<br>';
echo '</pre>';