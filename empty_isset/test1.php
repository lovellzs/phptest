<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2018/5/24
 * Time: 上午11:21
 */

const BR = '</br>';
$age = null;

echo empty($age).'---'.BR;
echo !isset($age).'---'.BR;

function f1($name, $sex){

    echo $name.'-$name--'.BR;
    echo $sex.'--$sex-'.BR;
    echo empty($sex).'---'.BR;
    echo isset($sex).'---'.BR;

}


//f1('aaaa');
//f1('aaaa',null);
//f1($sex=999,$name='qqq');//php的变量顺序按照自己的函数顺序，不支持key value
f1('aaaa',null);