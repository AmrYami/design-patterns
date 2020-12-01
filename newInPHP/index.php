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


echo substr("Hello world", 2, -2) . "<br>"; //going to remove first 2 chars and last 2 chars
//new in php 8
//php jit just in time compilation

//The PHP manual discourages the use of the eval() construct, stressing its use is "very dangerous" because arbitrary
// PHP code can be executed. Users are instructed to use any other option than eval() unless that is not possible.
// The use of PHP eval() construct presents security risks.
$age = 20;
$str = 'My age is $age';
echo $str . "\n"; //My age is $age
echo '<br>';
eval("\$str = \"$str\";");
echo $str . "\n";//My age is 20
//named parameter
setcookie('test', 3600, secure: true);
class test
{
    public function test1($name = 'asd', $date = 19, $sec = 'false')
    {
        echo $name . $date . $sec;
    }

    public function test2()
    {
        $this->test1('Amr', sec: 'true');

    }

}
$class = new test();
echo $class->test2();
echo '<br>';
//constructor property promotion
class test1
{
    public function __construct(public mixed $test = null)
    {
        $this->$test = 'asdf';
    }
    public function test()
{
    $this->test = 'Amr';
    return $this->test;
}

}

$class = new test1();
echo $class->test();
echo '<br>';
//union type
function testUnionType($val = false): array|bool{
    if ($val)
        return ['t' => 'one'];
    else
        return false;
}
print_r(testUnionType()) ;
echo '<br>';
//Match expression
function switchCase($val = 8.0){
    switch ($val) {
        case '8.0':
            $result = "Oh no!";
            break;
        case 8.0:
            $result = "This is what I expected";
            break;
    }
    echo $result;
}
switchCase(8.0);
echo '<br>';
function matchExpression($val = 8.0){
    echo match (8.0) {
    '8.0' => "Oh no!",
  8.0 => "This is what I expected",
};
}
matchExpression(8.0);
echo '<br>';
//Nullsafe operator
//$country = $session?->user?->getAddress()?->country;
echo '<br>';
class Model{
    public function get(): static{
        return new static;
    }
}
class User extends Model{

}
$model = new User();
var_dump($model->get());
echo '<br>';
str_contains("abc", "a"); // true
str_contains("abc", "d"); // false

// $needle is an empty string
str_contains("abc", "");  // true
str_contains("", "");     // true
echo '<br>';
$str = "beginningMiddleEnd";
if (str_starts_with($str, "beg")) echo "printed\n";
if (str_starts_with($str, "Beg")) echo "not printed\n";
if (str_ends_with($str, "End")) echo "printed\n";
if (str_ends_with($str, "end")) echo "not printed\n";
echo '<br>';



echo '<br>';
echo 'test test test test test';
