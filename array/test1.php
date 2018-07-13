<?php

$conns = [];
$conns[11] = '11';
$conns[1] = '1';
$conns[2] = '19';
$conns[8] = '8';
$conns[66] = '66';
$conns[111] = '111';
$conns[-1] = '-1';

foreach ($conns as $conn){
    echo $conn.'    ';
}
echo PHP_EOL;
echo PHP_EOL;

echo $conns['1'].PHP_EOL;
echo $conns['111'].PHP_EOL;
echo $conns[66].PHP_EOL;
echo $conns[-1].PHP_EOL;
echo $conns['-1'].PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;


for ($i=0;$i<3;$i++){
    echo $conns[$i];
}