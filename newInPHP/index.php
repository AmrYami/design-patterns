<?php

echo array_product([5, 6, 8, 9]); // multiply all values

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
function testUnionType($val = false): array|bool
{
    if ($val)
        return ['t' => 'one'];
    else
        return false;
}

print_r(testUnionType());
echo '<br>';
//Match expression
function switchCase($val = 8.0)
{
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
function matchExpression($val = 8.0)
{
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

class Model
{
    public function get(): static
    {
        return new static;
    }
}

class Users extends Model
{

}

$model = new Users();
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


function toggleValue1($num)//reverse true and false
{
    return (int) !$num;
}
echo toggleValue1(1);
function toggleValue($num)//reverse true and false
{
    return $num ^= 1;
}

echo toggleValue(0);

//Associative array.
$cars = array(
    'car_1' => 'BMW',
    'car_2' => 'Ford',
    'car_3' => 'Toyota',
    'car_4' => 'verna',
    'car_5' => 'Mercedes'
);

function middleElement($cars)
{
//Get the length of the array.
    $arraySize = count($cars);

//Divide the size by 2 and round down.
    $arraySizeDivided = ceil($arraySize / 2) - 1;

//Get a list of all array keys in the array.
    $arrayKeys = array_keys($cars);

//Get the middle key.
    $middleKey = $arrayKeys[$arraySizeDivided];
    return $cars[$middleKey];
}

echo middleElement($cars);


echo '<br>';
// Function to calculate Odd
function oddProduct($n)
{
    $odd = 1;

    for ($i = $n; $i > 0; $i--) {
        // Loop to find even, odd product
        if ($i % 2 != 0)
            $odd *= $i;
    }
    return $odd;
}

echo oddProduct(5);
echo '<br>';
//find lost number in array
function getLostNumber($array = []){

    $arr2 = range(1,max($array));

    return array_diff($arr2,$array);
}
print_r(getLostNumber([1,2,3,4,5,6,7,9,11]));

// An array that represents a possible record set returned from a database
$a = array(
    array(
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    )
);

$last_names = array_column($a, 'last_name'); //get specific column in assoc array
print_r($last_names);
//Array
//(
//    [0] => Griffin
//    [1] => Smith
//[2] => Doe
//)

echo '<br>';
echo array_product([1,22,3]);// multiply values in array
$num = 10;
array_product(range(1, $num));
array_count_values($arr);

$strArr = ["1, 3, 9, 10, 17, 18", "1, 4, 9, 10"];
$first = preg_split('/[\s,]+/', $strArr[0]);//get all elements after remove space and , as array
$second = preg_split('/[\s,]+/', $strArr[1]);//get all elements after remove space and , as array
array_intersect($first, $second);// compare arrays to get common values

$people = array(
    12345 => array(
        'id' => 12345,
        'first_name' => 'Joe',
        'surname' => 'Bloggs',
        'age' => 23,
        'sex' => 'm'
    ),
    12346 => array(
        'id' => 12346,
        'first_name' => 'Adam',
        'surname' => 'Smith',
        'age' => 18,
        'sex' => 'm'
    ),
    12347 => array(
        'id' => 12347,
        'first_name' => 'Amy',
        'surname' => 'Jones',
        'age' => 21,
        'sex' => 'f'
    )
);

print_r(array_sort($people, 'age', SORT_DESC)); // Sort by oldest first
print_r(array_sort($people, 'surname', SORT_ASC)); // Sort by surname