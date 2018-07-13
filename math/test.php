<?php

function numToFixed( $number , $actual = 8 ) {
    if( $number == 0  ){
        return 0 ;
    }
    $leftTailAmount = round($number - 5 * pow(10, -1 - $actual ),$actual);
    if( $leftTailAmount == 0 ){
        return 0 ;
    }

    return $leftTailAmount ;
}

echo numToFixed(1.1,2) . PHP_EOL;

echo numToFixed(1.123456789,8) . PHP_EOL;

echo numToFixed(0.0000000004,8) . PHP_EOL;