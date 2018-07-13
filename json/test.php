<?php
class Emp {
    public $name = "";
    public $hobbies  = "";
    public $birthdate = "";
}
$e = new Emp();
$e->name = "sachin";
$e->hobbies  = "sports";
$e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));


const BR = '</br>';


echo json_encode($e).BR;
echo json_encode(array($e,$e,$e)).BR;

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5); //{"a":1,"b":2,"c":3,"d":4,"e":5}
echo json_encode($arr).BR;

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5,'saasaasas'); //{"a":1,"b":2,"c":3,"d":4,"e":5,"0":"saasaasas"}
echo json_encode($arr).BR;


$cars=array("Volvo","BMW","Toyota");//没有关联数组的形式，转换成数组
echo json_encode($cars).BR;

$cars=array("Volvo","BMW","Toyota",'c' => 3);//有关联数组的形式，转换成对象
echo json_encode($cars).BR;

echo PHP_EOL;

$result = '';//null;
echo json_encode( $result,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT).PHP_EOL;
//echo json_decode( json_encode( $result,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ).PHP_EOL;