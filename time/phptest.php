<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2018/5/30
 * Time: 下午4:25
 */

echo date('Y-m-d').PHP_EOL;
echo date('Y-m-d G:i:s').PHP_EOL;


//1.datetime转化为timestamp

echo strtotime(date('Y-m-d G:i:s')).PHP_EOL;

//2.timestamp 转化为datetime

$date=date('Y-m-d H:i:s');
echo $date.PHP_EOL;

$iAmount = 1528.3700000050001;
$leftTailAmount = round($iAmount - 0.000000005,8);
echo $leftTailAmount.PHP_EOL;

$iAmount = 1528.3700000040001;
$leftTailAmount = round($iAmount - 0.000000005,8);
echo $leftTailAmount.PHP_EOL;