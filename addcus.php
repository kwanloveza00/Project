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
$seleDate =$_POST['seleDate'];


//print_r($_POST);
//die();

?>
<?php
$customer_query = db()->query('SELECT customerId FROM customers WHERE nameCustomer = "'. $cardId .'" LIMIT 1');


//{
//	die('Username duplicate');
//}

echo db()->error;
/*echo 'INSERT INTO customers
(
customerId,
adminId,
cardId,
name,
lastName,
phone,
address,
sex,
seleDate,
price
)
VALUES 
(
"'.$cardId.'",
"'.$name.'",
"'.$lastName.'",
"'.$phone.'",
"'.$address.'",
"'.$sex.'",
"'.$seleDate.'",
"'.$price.'"

)';*/
echo db()->error;
db()->query('INSERT INTO customers (
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
)');


$dealing_query = db()->query('SELECT dealingId FROM dealing WHERE productId = "'. $seleDate .'" LIMIT 1');

db()->query('INSERT INTO dealing (
productId,
seleDate
)
VALUES (
"'.$productId.'",
"'.$seleDate.'"
)');

<a href="data.php?<?=$db['id'];?>">



//header('Location: page2.php');
echo db()->error;


?>