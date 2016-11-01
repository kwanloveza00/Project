<?php
include 'config.php';
connect_db();
//if(!isset($_POST['customerId']) &&(!isset($_POST['cardId']) && !isset($_POST['name']) && !isset($_POST['last']) && !isset($_POST['phone']) && !isset($_POST['address']) && !isset($_POST['sex']))
{
	//die('Hacker');
}

$cardId = $_POST['cardId'];
$nameCustomer = $_POST['nameCustomer'];
$lastName = $_POST['lastName'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sex = $_POST['sex'];

if(mb_strlen($cardId,'UTF-8') < 3 || mb_strlen($cardId,'UTF-8') > 12)

{
	echo "<script>alert('Please enter cardId 3-12 charactors.');</script>";
	die();
}

if(mb_strlen($nameCustomer,'UTF-8') < 4 || mb_strlen($nameCustomer,'UTF-8') > 32)
{
	echo "<script>alert('Please enter nameCustomer 4-32 charactors.');</script>";
	die();
}

if(mb_strlen($phone,'UTF-8') < 9 || mb_strlen($phone,'UTF-8') > 32)
{
	echo "<script>alert('Please enter phone 10-32 charactors.');</script>";
	die();
}

if(mb_strlen($address,'UTF-8') <= 4)
{
	echo "<script>alert('Please enter address 4-32 charactors.');</script>";
	die();
}


//$seleDate =$_POST['seleDate'];
//$productId = $_POST['productId'];



//print_r($_POST);
//die();


$customer_query = db()->query('SELECT customerId FROM customers WHERE nameCustomer = "'. $phone .'" LIMIT 1');
//{
//	die('Username duplicate');
//}

echo db()->error;
/*echo 'INSERT INTO customers (
cardId,
nameCustomer,
lastName,
phone,
address,
sex
)
VALUES (
"'.$cardId.'",
"'.$nameCustomer.'",
"'.$lastName.'",
"'.$phone.'",
"'.$address.'",
"'.$sex.'"
)';
echo 'INSERT INTO dealing (
productId,
seleDate
)
VALUES (
productId
"'.$productId.'",
"'.$seleDate.'"
)';*/

echo db()->error;
db()->query('INSERT INTO customers (
cardId,
nameCustomer,
lastNameCus,
phone,
address,
sex
)
VALUES (
"'.$cardId.'",
"'.$nameCustomer.'",
"'.$lastName.'",
"'.$phone.'",
"'.$address.'",
"'.$sex.'"
)');


/*$dealing_query = db()->query('SELECT dealingId FROM dealing WHERE paymenet = "'. $adminId .'" LIMIT 1');

db()->query('INSERT INTO dealing (
adminId
)
VALUES (
"'.$adminId.'"
)');
*/


header('Location: addproduct.php');
echo db()->error;


?>