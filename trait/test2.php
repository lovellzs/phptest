<?php
trait StaticExample {
    public static function doSomething() {
        return 'Doing something'.PHP_EOL;
    }
}

class Base{
    use StaticExample;

    public static function sayHi() {
        return 'SayHi'.PHP_EOL;
    }
}

class Example extends Base {
//    use StaticExample;

//    public static function doSomething() {
//        return 'Doing something----'.PHP_EOL;
//    }

    public static function sayHi() {
        return 'SayHi----'.PHP_EOL;
    }

}


echo Base::doSomething();
echo Example::doSomething();

echo Base::sayHi();
echo Example::sayHi();
