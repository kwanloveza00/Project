<?php
session_start();
if(!isset($_SESSION['Admin']))
{
	header('Location: index.html');
	die();
}
include 'config.php';
connect_db();
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" >
<head>
	 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>LAB 4</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="js/jquery.mobile-1.4.3.min.css" />
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mobile-1.4.3.min.js"></script>

</head>
<body>

<div data-role="page" id="page3">			
			<div data-role="panel" id="defaultpanel" data-display="overlay">				
				<ul data-role="listview">
					<li data-icon="info" data-theme="b"><a href="#" data-rel="close">ปิดเมนู</a></li>
					<li><a href="page1.php">หน้าหลัก</a></li>
					<li><a href="page2.php">เช็คข้อมูลลูกค้า</a></li>
					<li><a href="page3.php">เช็คข้อมูลพนักงาน</a></li>
					<li><a href="page4.php">เพิ่มข้อมูลลูกค้า</a></li>
					<li><a href="page5.php">เพิ่มข้อมูลพนักงาน</a></li>
					<li><a href="page6.php">ลบ/แก้ไข ข้อมูลลูกค้า</a></li>
				</ul>
			</div><!-- /panel -->

			<div data-role="panel" id="defaultpanel-p2-2" data-display="overlay" data-position="right">
				<a href="#my-header" data-rel="close">Close panel</a>
			</div><!-- /panel -->

			<div data-role="header">
				<a href="#defaultpanel" data-icon="bars" data-iconpos="notext">Menu</a>
				<h1>เช็คข้อมูลพนักงาน</h1>
			</div><!-- /header -->

			<table class="table table-hover">
	<tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ID</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เบอร์โทร</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันเกิด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพศ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ที่อยู่</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพิ่มข้อมูล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>แก้ไข</strong></FONT></center></td>
	</tr>
	<!--  -->
<?php

$query = db()->query('SELECT adminId, name, lastName, phone, empoyeeId, birthday, sex, address, classId, createdBy FROM admin ORDER BY adminId ASC');

while(list($adminId, $name, $lastName, $phone, $empoyeeId, $birthday , $sex, $address, $classId, $createdBy) = $query->fetch_row())
{

?>

<tr >
		<td><center><?php echo $adminId;?></td>
		<td><center><?php echo $empoyeeId;?></td>
		<td><center><?php echo $name;?>  <?php echo $lastName ;?></td>
		<td><center><?php echo $phone;?></td>
		<td><center><?php echo $birthday;?></td>
		<td><center><?php echo $sex;?></td>
		<td><center><?php echo $address; ?></center></td>
		<td><center><a href="#addcustom2">เพิ่ม</a></center></td>
		<td><center><a href="editadmin.php?adminId=<?php echo $adminId; ?>">แก้ไข</a></center></td>
		
		</tr>
<?php
}
?>
</table>

			<div data-role="footer">
				<h4>จบหน้า</h4>
			</div><!-- /footer -->
		</div>
 




  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>

	</body>
</html>