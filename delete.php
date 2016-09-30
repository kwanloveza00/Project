<?php

include 'config.php';
connect_db();

$dealing_query = db()->query('DELETE FROM dealing WHERE dealingId = "'. $_GET['dealingId'] .'" LIMIT 1');
$customer_query = db()->query('DELETE FROM customers WHERE customerId = "'. $_GET['customerId'] .'" LIMIT 1');

echo db()->error;
	//header('Location: page6.php');
?>