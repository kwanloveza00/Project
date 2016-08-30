<?php
include 'config.php'; 
connect_db();
//if(!isset($_POST['Bookname']) && !isset($_POST['Author']) && !isset($_POST['ISBN']) && !isset($_POST['Groupbook']))
//{
	//die('Hacker');
//}

$adminId= $_POST['adminId'];
$cardId= $_POST['cardId'];
$name= $_POST['name'];
$lastName= $_POST['lastName'];
$adminId= $_POST['adminId'];
$ID= $_POST['id'];


/*if(mb_strlen($Bookname,'UTF-8') < 4 || mb_strlen($Bookname,'UTF-8') > 32)

{
	die('Please enter Bookname 4-32 charactors.');
}

if(mb_strlen($Author,'UTF-8') < 4 || mb_strlen($Author,'UTF-8') > 32)
{
	die('Please enter Author 4-32 charactors.');
}

if(mb_strlen($ISBN,'UTF-8') < 4 || mb_strlen($ISBN,'UTF-8') > 32)
{
	die('Please enter ISBN 4-32 charactors.');
}

if(mb_strlen($Groupbook,'UTF-8') <= 0)
{
	die('Please enter Groupbook.');
}

if($Groupbook != $Groupbook)
{
	die('Groupbook and Groupbook not same');
}*/

$s = sprintf('UPDATE customers SET adminId="%s",cardId="%s",name="%s",lastName="%s" ,phone="%s",address="%s",sex="%s" WHERE customerId ="%s" LIMIT 1',$adminId,$cardId,$name,$lastName,$phone,$address,$sex,$customerId);
db()->query($s);
echo db()->error;
header('Location:index.php');
  ?> 

