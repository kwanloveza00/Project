<?php
include 'config.php';
connect_db();
//if(!isset($_POST['customerId']) &&(!isset($_POST['cardId']) && !isset($_POST['name']) && !isset($_POST['last']) && !isset($_POST['phone']) && !isset($_POST['address']) && !isset($_POST['sex']))
//{
	//die('Hacker');
//}

$seleDate =$_POST['seleDate'];
$productId = $_POST['productId'];
$adminId = $_POST['adminId'];
$customerId =$_POST['customerId'];


/*if(mb_strlen($seleDate == 0000-00-00) )

{
	echo "<script>alert('Please enter cardId 3-12 charactors.');</script>";
	die('Please enter cardId 3-12 charactors.');
}
*/

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




$dealing_query = db()->query('SELECT dealingId FROM dealing WHERE paymenet = "'. $seleDate .'" LIMIT 1');

db()->query('INSERT INTO dealing (
seleDate,
productId,
adminId,
customerId

)
VALUES (
"'.$seleDate.'",
"'.$productId.'",
"'.$adminId.'",
"'.$customerId.'"
)');



header('Location: page2.php');
echo db()->error;


?>