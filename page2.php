<?php
include 'config.php';
connect_db();
//if(!isset($_POST['customerId']) &&(!isset($_POST['cardId']) && !isset($_POST['name']) && !isset($_POST['last']) && !isset($_POST['phone']) && !isset($_POST['address']) && !isset($_POST['sex']))
{
	//die('Hacker');
}
$customerId = db()->real_escape_string($_POST['customerId']);
$adminId = db()->real_escape_string($_POST['adminId']);
$cardId = db()->real_escape_string($_POST['cardId']);
$name = db()->real_escape_string($_POST['name']);
$last = db()->real_escape_string($_POST['lastName']);
$phone = db()->real_escape_string($_POST['phone']);
$address = db()->real_escape_string($_POST['address']);
$sex = db()->real_escape_string($_POST['sex']);

?>
<?php
$query = db()->query('SELECT customerId FROM customers WHERE name = "'. $cardId .'" LIMIT 1');
if($query->num_rows > 0)

{
	die('Username duplicate');
}

echo db()->error;

db()->query('INSERT INTO customers
(
customerId,
adminId,
cardId,
name,
lastName,
phone,
address,
sex
)
VALUES 
(
"'.$customerId.'",
"'.$adminId.'",
"'.$cardId.'",
"'.$name.'",
"'.$lastName.'",
"'.$phone.'",
"'.$address.'",
"'.$sex.'"
)');
header('Location: index.php');
echo db()->error;
echo $mysqli->error;

?>