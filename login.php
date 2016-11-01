<?php
session_start(); 
include 'config.php';
connect_db();

$empoyeeId = $_POST['empoyeeId'];
$password = $_POST['password'];

if($empoyeeId == ''){
echo "empoyeeId";
} else if($password == ''){
echo "password";
} else {


$query = db()->query('SELECT adminId, name, lastName, phone, empoyeeId, password, name, birthday, sex, address, classId, createdBy FROM admin WHERE empoyeeId="'.$empoyeeId.'" and password="'.$password.'"');

echo db()->error;
$data = $query->fetch_array();
$_SESSION['empoyeeId']=$data['adminId'];

if ($data['classId'] == 1){
	/*$_SESSION['status'] = "Admin";*/
	$_SESSION['Admin'] = "Admin";
	echo "<meta http-equiv='refresh' content='1;URL=page1.php'>";

}elseif ($data['classId'] == 2){
	/*$_SESSION['status'] = "User";*/
	$_SESSION['User'] = "User";
	echo "<meta http-equiv='refresh' content='1;URL=menuUser.php'>";
}else
	{
//ไม่ผ่าน
header('Location:index.html');
die();

}
/*$num = $query->num_rows;
if($num <= 0){
echo "<meta http-equiv='refresh' content='1;URL=index.html'>";
}
while(list($no, $userId, $username, $password, $status, $first, $name, $sername, $position, $tel, $statusnow, $category, $datein, $dateout) = $query->fetch_row())

if($status == 1){
$data = $query->fetch_array();
$_SESSION['status'] = "Admin";
$_SESSION['userIdtest']=$data['userId'];
echo "<meta http-equiv='refresh' content='1;URL=menu.php'>";
}

else if($status == 2){
$data = $query->fetch_array();
$_SESSION['status'] = "User";
$_SESSION['userIdtest']=$data['userId'];
echo "<meta http-equiv='refresh' content='1;URL=menuUser.php'>";
}

else{
$data = $query->fetch_array();
$_SESSION['status'] = "User";
$_SESSION['userIdtest']=$data['userId'];
echo "<meta http-equiv='refresh' content='1;URL=menuUser2.php'>";
}
*/

/*	if($num <= 0){
	echo "<meta http-equiv='refresh' content='1;URL=index.html'>";
	} else {
		while(list($no, $userId, $username, $password, $status, $first, $name, $sername, $position, $tel, $statusnow, $category, $datein, $dateout) = $query->fetch_row())
		//echo $status;
		if($status == 1){
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $status;
				$_SESSION['status'] = "Admin";
				$_SESSION['userId'] = "userId";
				echo "<meta http-equiv='refresh' content='1;URL=menu.php'>";
		}else if($status == 2){
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $status;
				$_SESSION['status'] = "User";
				$_SESSION['userId'] = "userId";
				echo "<meta http-equiv='refresh' content='1;URL=menuUser.php'>";
		} else{
				$_SESSION['ses_id'] = session_id();
				$_SESSION['username'] = $status;
				$_SESSION['status'] = "User2";
				$_SESSION['userId'] = "userId";
				echo "<meta http-equiv='refresh' content='1;URL=menuUser2.php'>";
		}

		}*/
	}
?>


<!--<?php
session_start(); 
include 'config.php';
connect_db();
$empoyeeId = $_POST['empoyeeId'];
$password = $_POST['password'];
	mysql_connect('localhost','root','','project');
	mysql_select_db('project');
	$str_SQL = ('SELECT * FROM admin WHERE empoyeeId = "'.trim($_POST['empoyeeId']).'" 
	and password = "'.trim($_POST['password']).'"');
	echo db()->error;
	
	$obj_Query = mysql_query($str_SQL);
	$obj_Result = mysql_fetch_array($obj_Query);
	if(!$obj_Result)
	{
			echo "<script>alert('Username and Password Incorrect!');</script>";
			exit();
	}
	else
	{
			$_SESSION["adminId"] = $objResult["adminId"];
			$_SESSION["classId"] = $objResult["classId"];

			session_write_close();
			
			if($objResult["classId"] == "1")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysql_close();
?>-->




<!-------------------------------------------------------------------------->

