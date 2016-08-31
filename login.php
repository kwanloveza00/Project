<?php
session_start();
include 'config.php';
connect_db();

$empoyeeId= $_POST['empoyeeId'];
$birthday= $_POST['birthday'];

$query =db()->query('SELECT adminId FROM admin WHERE empoyeeId="'. $empoyeeId .'" AND birthday = "'. $birthday .'" LIMIT 1');

//echo db()->error;

$num = $query->num_rows;

if($num > 0)
{
//ผ่าน
$_SESSION['login'] = true;
setcookie('empoyeeId', $empoyeeId,time()+3600*24*356);
header('location:text.php');
die();
}
else
{
//ไม่ผ่าน
setcookie('empoyeeId', $empoyeeId);
header('location:index.html');
die();
}
