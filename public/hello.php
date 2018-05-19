<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello World!";
$name = 100;
?>
<br>
<?php
echo "Hello========";
echo $name;

include 'index.php';
?>

我最喜欢的人<a href="#"><?php echo $name; ?></a><br>
<?php echo $aaa; ?><br>

<?php echo $config['age']; ?><br>

<?php  echo $config['name']; ?><br>

<?php
$config['name'] = 'lisi';
echo $config['name'];
?><br>

<?php  echo $ppp; ?><br>

</body>
</html>