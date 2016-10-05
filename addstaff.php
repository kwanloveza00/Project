<?php
include 'config.php';
connect_db();
/*if(!isset($_POST['adminId']) &&(!isset($_POST['name']) && !isset($_POST['lastName']) && !isset($_POST['phone']) && !isset($_POST['empoyeeId']) && !isset($_POST['password']) && !isset($_POST['cpassword'])&& !isset($_POST['birthday'])&& !isset($_POST['sex'])&& !isset($_POST['address']))
{
	die('Hacker');
}*/
$adminId = $_POST['adminId'];
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$empoyeeId = $_POST['empoyeeId'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$classId = $_POST['classId'];
$createdBy = $_POST['createdBy'];

if($password != $cpassword )

{
	die('not password.');
}

$query = db()->query('SELECT adminId FROM admin WHERE empoyeeId = "'. $empoyeeId .'" LIMIT 1');
if($query->num_rows > 0)

/*{
	die('empoyeeId duplicate');
}*/

echo db()->error;

db()->query('INSERT INTO admin
(
name,
lastName,
phone,
empoyeeId,
password,
birthday,
sex,
address,
classId,
createdBy
)
VALUES 
(
"'.$name.'",
"'.$lastName.'",
"'.$phone.'",
"'.$empoyeeId.'",
"'.$password.'",
"'.$birthday.'",
"'.$sex.'",
"'.$address.'",
2,
1
)');
//header('Location:text.php');
echo db()->error;
echo $mysqli->error;
?>