<?php
session_start();

//include("DBDA.class.php");
//$db = new DBDA();

$uid = $_POST["uid"];
$pwd = $_POST["pwd"];

//$sql = "select pwd from users where uid='{$uid}'";    //通过用户名，判断密码
//$attr = $db->Query($sql);

$mm = "123";                                   //取出密码

if(!empty($pwd) && $pwd==$mm)
{
    $_SESSION["uid"] = $uid;                         //如果登录成功，把取到的用户名放到session保存，跳转到主页面
//    header("location:main.php");
    header("location:../test.php");
}
else
{
    echo "登录失败!";
}