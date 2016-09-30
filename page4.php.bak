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
	<div data-role="page" id="page4">
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
				<h1>เพิ่มข้อมูลลูกค้า</h1>
				<a href="login.php?q=logout" class="ui-btn ui-shadow">ออกจากระบบ</a>
			</div><!-- /header -->

			<div id="">
 <div class="row">
   <form class="form-horizontal"action="addcus.php" method="post" data-ajax="false">
   
	
	<div class="form-group">

		<label class="col-sm-2 control-label">รหัส Card:</label>
		<div class="col-sm-8">
			<input type="text" name="cardId"class="form-control"placeholder="รหัส">
		</div>
		</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">ชื่อ:</label>
		<div class="col-sm-8">
		<input type="text" name="nameCustomer"class="form-control"placeholder="ชื่อ">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">นามสกุล:</label>
		<div class="col-sm-8">
		<input type="text" name="lastName"class="form-control"placeholder="นามสกุล">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" >เพศ:</label>
		<div class="col-sm-2" placeholder="เพศ">
	<select class="form-control" name="sex" placeholder="เพศ">
  <option value="ชาย">ชาย</option>
  <option value="หญิง">หญิง</option>
</select>
		<div class="col-sm-4"></div>
		</div>
	</div>


	<div class="form-group">
		<label class="col-sm-2 control-label">เบอร์โทร:</label>
		<div class="col-sm-8">
		<input type="text" name="phone"class="form-control"placeholder="เบอร์โทรศัพท์">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" >ที่อยู่:</label>
		<div class="col-sm-8">
		<input type="text" name="address"class="form-control"placeholder="ที่อยู่">
		<div class="col-sm-2"></div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" >วันที่ขาย:</label>
		<div class="col-sm-8">
		<input type="date" name="seleDate"class="form-control"placeholder="วันที่ขาย">
		<div class="col-sm-2"></div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" >ราคาสินค้า</label>
		<div class="col-sm-8" placeholder="ราคาสินค้า">
	<select class="form-control" name="productId" placeholder="ราคาสินค้า">
  <option value="1">เครื่องปั่น  2800</option>
  <option value="2">เครื่องปั่น  2500</option>
</select>
		<div class="col-sm-2"></div>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label" >ราคาสินค้า</label>
		<div class="col-sm-8" placeholder="ราคาสินค้า">
	<select class="form-control" name="productId" placeholder="ราคาสินค้า">
  <option value="1">เครื่องปั่น  2800</option>
  <option value="2">เครื่องปั่น  2500</option>
</select>
		<div class="col-sm-2"></div>
		</div>
	</div>
                 
            <div class="form-group">
                <div class="col-md-4"></div>
				<div class="col-md-4">
				<input class="btn btn-warning" type="submit" value="เพิ่ม"></div>
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