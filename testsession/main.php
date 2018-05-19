<?php
session_start();


if(empty($_SESSION["uid"]))               //判断session里面是不是存储到值，如果没有存储，让其跳转到登录界面
{
    header("location:login.php");
    exit;
}

$uid = $_SESSION["uid"];                    //如果能够取到，通过session取到的用户名，显示下面的信息
//include("DBDA.class.php");
//$db = new DBDA();
//$sql = "select name from users where uid='{$uid}'";
//$attr = $db->Query($sql);

?>
<body>
<?php
echo "<h1>欢迎登录：{$uid}</h1>";

?>