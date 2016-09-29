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

	<div data-role="page" id="addcustom2">
			<div data-role="panel" id="defaultpanel" data-display="overlay">				
				<ul data-role="listview">
					<li data-icon="info" data-theme="b"><a href="#" data-rel="close">ปิดเมนู</a></li>
					<li><a href="#page1">หน้าหลัก</a></li>
					<li><a href="#page2">เช็คข้อมูลลูกค้า</a></li>
					<li><a href="#page3">เช็คข้อมูลพนักงาน</a></li>
					<li><a href="#page4">เพิ่มข้อมูลลูกค้า</a></li>
					<li><a href="#page5">เพิ่มข้อมูลพนักงาน</a></li>
					<li><a href="#page6">ลบ/แก้ไข ข้อมูลลูกค้า</a></li>
				</ul>
			</div><!-- /panel -->

			<div data-role="panel" id="defaultpanel-p2-2" data-display="overlay" data-position="right">
				<a href="#my-header" data-rel="close">Close panel</a>
			</div><!-- /panel -->


			<div data-role="header">
				<a href="#defaultpanel" data-icon="bars" data-iconpos="notext">Menu</a>
				<h1>เพิ่มข้อมูลลูกค้า</h1>
				<a href="login.php?q=logout" class="ui-btn ui-shadow">ออกจากระบบ</a>
			</div><!-- /header -->

			<div class="container">
 <div class="row">
   <form class="form-horizontal"action="page4.php" method="post">
   
	
	<div class="form-group">

		<div class="form-group">
		<label class="col-sm-2 control-label" >ชื่อสินค้า:</label>
		<div class="col-sm-8">
		<input type="text" name="productName"class="form-control"placeholder="ชื่อสินค้า">
		<div class="col-sm-2"></div>
		</div>
	</div>

	
	<div class="form-group">
		<label class="col-sm-2 control-label">ชำระเงิน: </label>
			<div class="col-sm-8">
		<input type="text" name="paymenet"class="form-control"placeholder="ชำระเงิน">
		<div class="col-sm-2">
	 </div>
	</div>
	</div>


<div class="form-group">
		<label class="col-sm-2 control-label" >วันที่ชำระ :</label>
			<div class="col-sm-8">
		<input type="text" name="paymenetDate"class="form-control"placeholder="วันที่ชำระ">
	 </div>
	 </div>

		 <div class="form-group">
		<label class="col-sm-2 control-label" >ชื่อพนักงาน:</label>
			<div class="col-sm-8">
		<input type="text" name="createdBy"class="form-control"placeholder="ชื่อพนักงานขาย">
	 </div>
		 </div>
	      
                 
            <div class="form-group">
                <div class="col-md-4"></div>
				<div class="col-md-4">
				<input  a class="btn btn-warning" type="submit" value="เพิ่ม"></a></div>
                <div class="col-md-4">
				</div>
				</div>

				</ul>
		</ul>
			<ul class="nav navbar-nav navbar-left">
		</ul>
  </form>

 </div>
</div>

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>

	</body>
</html>