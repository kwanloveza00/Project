<?php
include 'config.php';
connect_db();
//if(!isset($_POST['customerId']) &&(!isset($_POST['cardId']) && !isset($_POST['name']) && !isset($_POST['last']) && !isset($_POST['phone']) && !isset($_POST['address']) && !isset($_POST['sex']))
{
	//die('Hacker');
}
$adminId = db()->real_escape_string($_POST['adminId']);
$name = db()->real_escape_string($_POST['name']);
$lastName = db()->real_escape_string($_POST['lastName']);
$phone = db()->real_escape_string($_POST['phone']);
$empoyeeId = db()->real_escape_string($_POST['empoyeeId']);
$birthday = db()->real_escape_string($_POST['birthday']);
$sex = db()->real_escape_string($_POST['sex']);
$address = db()->real_escape_string($_POST['address']);
$classId = db()->real_escape_string($_POST['classId']);
$createdBy = db()->real_escape_string($_POST['createdBy']);

?>
<?php
$query = db()->query('SELECT adminId FROM admin WHERE empoyeeId = "'. $empoyeeId .'" LIMIT 1');
if($query->num_rows > 0)

{
	die('empoyeeId duplicate');
}

echo db()->error;

db()->query('INSERT INTO admin
(
adminId,
name,
lastName,
phone,
empoyeeId,
birthday,
sex,
address,
classId,
createdBy
)
VALUES 
(
"'.$adminId.'",
"'.$name.'",
"'.$lastName.'",
"'.$phone.'",
"'.$empoyeeId.'",
"'.$birthday.'",
"'.$sex.'",
"'.$address.'",
"'.$classId.'",
"'.$createdBy.'"
)');
header('Location: text.php#page3');
echo db()->error;
echo $mysqli->error;
?>