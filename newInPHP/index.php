<?php

$user = fn($userName) => $userName;
echo $user('amro');
echo '<br><br><br>';
$arr = ['Amr', 'Yami'];
$res = array_map(fn($user) => strtolower($user), $arr);
echo '<pre>';
print_r($res);
echo '</pre>';
echo '<br><br><br>';
$numbers = [1, 2, 3, 4];
$s = 5;
$res = array_map(fn($number) => $number + $s, $numbers);
echo '<pre>';
print_r($res);
echo '</pre>';
echo '<br><br><br>';
$arr = ['amr', 'yami'];
$array = ['horan', ...$arr, 'yami1'];
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<pre>';
print_r([...$array, ...$arr]);
echo '</pre>';
echo '<br><br><br>';
$array = [['amr', 'yami'], ['horan', 'yami1']];
echo '<pre>';
print_r(array_merge(...$array));
echo '</pre>';
echo '<br><br><br>';

$arr = [1, 2, 3];
$arr1 = [4, 5, 6, 7];
echo '<pre>';
print_r($arr + $arr1);
echo '</pre>';
echo '<br><br><br>';

$arr = ['name' => 'amr', 'age' => 32];
$arr1 = ['tel' => 564897];
echo '<pre>';
print_r($arr + $arr1);
echo '</pre>';
echo '<br><br><br>';

//Ternary Operator
//$response = isset($users) ? $users : "No Users !! \n";
//null_coalesing
//Null Coalesing Operator
$response = $users ?? "No Users !! \n";
print_r($response);

echo '<br><br><br>';
//weak_reference
$obj = new stdClass;
$weakref = WeakReference::create($obj);
var_dump($weakref->get());
unset($obj);
var_dump($weakref->get());

echo '<br><br><br>';

//nested class
class user
{
        const DATA = ['name' => 'aaaaaaaa', 'phone' => 654654];
    protected static $username, $pass;
    public function nestedClass()
    {
        return new class {
            public function hashing($data)
            {
                return md5($data);
            }
        };
    }
}
$user = new user();
echo $user->nestedClass()->hashing('akhsakjldh');
echo '<br><br><br>';
echo user::DATA['name'];
echo '<br><br><br>';

$variable = '';
$count = is_countable($variable) ? count($variable) : null;
echo $count;
