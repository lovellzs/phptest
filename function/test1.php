<?php

class A{
    public static $aaa = 111;

    public static function f1(){
        echo 'f1'.PHP_EOL;
    }
}

class B extends A{

    public static $aaa = 222;

    public static function f1(){
        echo 'f2'.PHP_EOL;
    }

    public static function f2(){
        echo 'f2'.PHP_EOL;
    }

    public static function f3(){
        self::f1();
    }

    public static function f4(){
        parent::f1();
    }

}

A::f1();
B::f1();

//B::f3();
//B::f4();

echo A::$aaa .PHP_EOL;
echo B::$aaa .PHP_EOL;
echo A::$aaa .PHP_EOL;