<?php
echo $_GET['adminId'];
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
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
			<a href="#page1" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">กลับ</a>
				<a href="#defaultpanel" data-icon="bars" data-iconpos="notext">Menu</a>
				<h1>เช็คข้อมูลพนักงาน</h1>
			</div><!-- /header -->

 <table class="table table-hover">

 <tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>คนที่</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เบอร์</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ไอดีพนักงาน</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>รหัสผ่าน</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันเกิด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพศ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ที่อยู่</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ตำแหน่ง</strong></FONT></center></td>
		
	</tr>
	<!--<tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันที่ขาย</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>จำนวนเงิน</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>จ่าย</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>คงเหลือ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันที่ชำระ</strong></FONT></center></td>
	</tr> -->
	<!--  -->
	<div class="form-group">
		<div class="col-sm-5"></div>
		<h2><FONT COLOR='#ff0000'>ข้อมูลพนักงาน</FONT></h2>
		<div class="col-sm-8">
	</div>

<?php
include 'config.php';
connect_db();
//$query = db()->query('SELECT customerId, cardId, name, lastName, phone, address, sex FROM customers ORDER BY customerId ASC');
$admin_query = db()->query('SELECT adminId,name,lastName,phone,empoyeeId,password,birthday,sex,address,classId,createdBy FROM admin WHERE adminId = "'.$_GET['adminId'].'"');

list($adminId, $name, $lastName, $phone, $empoyeeId, $password, $birthday, $sex, $address, $classId, $createdBy ) = $admin_query->fetch_row();
?>

<div class="container">
	<div class="row">
	<form class="form-horizontal" action="page4.php" method="post">

	<tr >
		<td><center><?php echo $adminId;?></td>
		<td><center><?php echo $name;?>  <?php echo $lastName ;?></td>
		<td><center><?php echo $phone;?></td>
		<td><center><?php echo $empoyeeId;?></td>
		<td><center><?php echo $password;?></td>
		<td><center><?php echo $birthday;?></td>
		<td><center><?php echo $sex;?></td>
		<td><center><?php echo $address;?></td>
		<td><center><?php echo $classId;?></td>
		
		</tr>

	<div class="form-group">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
		<!--<input type="hidden" name="customerId" value="<?php echo $_GET['customerId'];?>">
		<input a class="btn btn-primary" type="submit" value="แก้ไข"></a></div>
	 </div>-->
<table class="table table-hover">
  </form>
  </div>
</div>
</div>
  
  
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>