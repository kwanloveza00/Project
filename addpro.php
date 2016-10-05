<?php
include 'config.php';
connect_db();
//if(!isset($_POST['customerId']) &&(!isset($_POST['cardId']) && !isset($_POST['name']) && !isset($_POST['last']) && !isset($_POST['phone']) && !isset($_POST['address']) && !isset($_POST['sex']))
{
	//die('Hacker');
}

$cardId = $_POST['cardId'];
$seleDate =$_POST['seleDate'];
$productId = $_POST['productId'];



//print_r($_POST);
//die();
 $sql = "INSERT INTO customers customerId values '$customerId' ";
$id = mysql_insert_id();
$sql = " INSERT INTO dealing customerId Values '$id' ";

?>
<?php
$customer_query = db()->query('SELECT customerId FROM customers WHERE nameCustomer = "'. $cardId .'" LIMIT 1');


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
cardId
)
VALUES (
"'.$cardId.'"
)');


$dealing_query = db()->query('SELECT dealingId FROM dealing WHERE paymenet = "'. $seleDate .'" LIMIT 1');

db()->query('INSERT INTO dealing (
productId,
adminId,

seleDate
)
VALUES (
"'.$productId.'",
"'.$adminId.'",
"'.$seleDate.'"
)');



//header('Location: page2.php');
echo db()->error;


?>