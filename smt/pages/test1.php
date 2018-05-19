<?php
require '../smarty/libs/Smarty.class.php';
require '../user.class.php';

$smarty=new Smarty();

$name='刘二狗';
$user = new User();

$smarty->assign( 'name' , $name );
$smarty->assign( 'user' , $user );

$smarty->display('../templates/test1.html');