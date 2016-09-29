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
<div data-role="page" id="page1">			
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


			<div data-role="panel" id="defaultpanel2" data-display="push">
				<a href="#my-header" data-rel="close">Close panel</a>
			</div><!-- /panel -->

			<div data-role="panel" id="defaultpanel3" data-display="reveal">
				<a href="#my-header" data-rel="close">Close panel</a>
				
			</div><!-- /panel -->

			<div data-role="header">
			
				<h1>ระบบติดตามค่างวด</h1>
				<!-- ใส่เมนู -->

				<a href="#defaultpanel" data-icon="bars" data-iconpos="notext">Menu</a>
				
				<a href="logout.php" class="ui-btn ui-shadow">ออกจากระบบ</a>
			</div><!-- /header -->

			<div data-role="footer">
			<div role="main" class="ui-content"><center>
				<img src="img/ALOHA.png" width="25%"></center>
			</div><!-- /content -->

<div id="content">
			<div id="email">
        <input name="form-email" type="text" class="input" id="form-email" placeholder="ค้นหาลูกค้า">
		
		<input name="submit" type="submit" class="button" id="submit" value="ค้นหา">
<!--------------->

   </div>
   </div>
				<h4>จบหน้า1</h4>
			</div><!-- /footer -->
		</div>

 




  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>

	</body>
</html>