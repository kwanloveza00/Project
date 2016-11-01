<?php
include 'config.php';
connect_db();
/*if(!isset($_POST['adminId']) &&(!isset($_POST['name']) && !isset($_POST['lastName']) && !isset($_POST['phone']) && !isset($_POST['empoyeeId']) && !isset($_POST['password']) && !isset($_POST['cpassword'])&& !isset($_POST['birthday'])&& !isset($_POST['sex'])&& !isset($_POST['address']))
{
	die('Hacker');
}*/

//$paymentId = $_POST['paymentId'];
$dealingId = $_POST['dealingId'];
$payment = $_POST['payment'];
$paymenetDate = $_POST['paymenetDate'];


/*if($password == $cpassword )

{
	die('not password.');
}*/

$payment_query = db()->query('SELECT paymentId FROM payments WHERE payment = "'. $payment .'" LIMIT 1');
/*if($payment_query->num_rows > 0)

{
	die('empoyeeId duplicate');
}*/

echo db()->error;

db()->query('INSERT INTO payments
(
dealingId,
payment,
paymenetDate
)
VALUES 
(
"'.$dealingId.'",
"'.$payment.'",
"'.$paymenetDate.'"
)');
header('Location:page2.php');
echo db()->error;
echo $mysqli->error;
?>