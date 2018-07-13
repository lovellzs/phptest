<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2018/5/22
 * Time: 下午9:32
 */

$mtime=explode(' ',microtime());
$startTime=$mtime[1]+$mtime[0];
echo $startTime; //1385976275.33

echo '<br>';
echo (microtime()); //0.25139300 1138197510

echo '<br>';

$dStartTime1 = microtime(true);
echo $dStartTime1.'<br>';
for( $i <0;$i<10000000;$i++ ){
    if($i % 9999999 ==0){
        echo $i.'<br>';
    }

}
$dStartTime2 = microtime(true);
echo $dStartTime2 . '<br>';

echo $dStartTime2 - $dStartTime1;

echo '<br>';

echo date('Y-m-d');
echo '<br>';
echo date('Y-m-d G:i:s');