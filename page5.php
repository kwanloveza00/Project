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

<div data-role="page" id="page5">
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
				<h1>เพิ่มข้อมูลพนักงาน</h1>
			</div><!-- /header -->
			<div id="">
 <div class="row">
   <form class="form-horizontal"action="page3.php" method="post">

			
		<div class="form-group">
		<label class="col-sm-2 control-label">ไอดีพนักงาน</label>
		<div class="col-sm-8">
			<input type="text" name="empoyeeId"class="form-control"placeholder="ไอดีพนักงาน">
		</div>
		</div>

		<div class="form-group">
		<label class="col-sm-2 control-label">รหัสผ่าน</label>
		<div class="col-sm-8">
			<input type="password" name="password"class="form-control"placeholder="รหัสผ่าน">
		</div>
		</div>

   <!-- <div class="form-group">
		<label class="col-sm-2 control-label">ยืนยันรหัสผ่าน</label>
		<div class="col-sm-8">
			<input type="password" name="cpassword"class="form-control"placeholder="ยืนยันรหัสผ่าน">
		</div>
		</div> -->

	<div class="form-group">
		<label class="col-sm-2 control-label">ชื่อ:</label>
		<div class="col-sm-8">
		<input type="text" name="name"class="form-control"placeholder="ชื่อ">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">นามสกุล:</label>
		<div class="col-sm-8">
		<input type="text" name="lastName"class="form-control"placeholder="นามสกุล">
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">วันเกิด:</label>
		<div class="col-sm-8">
		<input type="date" name="birthday"class="form-control"placeholder="วันเกิด">
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
		<label class="col-sm-2 control-label" >เพศ:</label>
		<div class="col-sm-8" name="sex"placeholder="เพศ">
	<select class="form-control">
  <option value="ชาย">ชาย</option>
  <option value="หญิง">หญิง</option>
</select>
		<div class="col-sm-2"></div>
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
  
<?php
$query = db()->query('SELECT adminId, empoyeeId, name, lastName, phone, birthday, address, sex, classId, createdBy FROM admin ORDER BY adminId ASC');
while(list($adminId, $empoyeeId, $name, $lastName, $phone, $birthday, $address, $sex, $classId, $createdBy) = $query->fetch_row())
{
?>


<?php
}
?>
			</div><!-- /content -->

			<div data-role="footer">
				<h4>จบหน้า</h4>
			</div><!-- /footer -->
		</div>
		</div>
 
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>

	</body>
</html>