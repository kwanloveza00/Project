<?php
session_start();
include 'config.php';
connect_db();

$username= $_POST['username'];
$password= $_POST['password'];

$query =db()->query('SELECT userID FROM users WHERE userName="'. $username .'" AND userPass = "'. $password .'" LIMIT 1');

//echo db()->error;

$num = $query->num_rows;

if($num > 0)
{
//ผ่าน
$_SESSION['login'] = true;
header('location:register.php');
die();
}
else
{
//ไม่ผ่าน
header('location:index.html');
die();
}
