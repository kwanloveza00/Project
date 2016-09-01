<?php
<<<<<<< HEAD
session_start();
if(!isset($_SESSION['Admin']))
{
	header('Location: index.html');
	die();
}
include 'config.php';
connect_db();
?>

=======
include 'config.php';
connect_db();
?>
>>>>>>> 75f08442a8c19931760714f55bc8f81016d6fce8
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
					<li><a href="#page1">หน้าหลัก</a></li>
					<li><a href="#page2">เช็คข้อมูลลูกค้า</a></li>
					<li><a href="#page3">เช็คข้อมูลพนักงาน</a></li>
					<li><a href="#page4">เพิ่มข้อมูลลูกค้า</a></li>
					<li><a href="#page5">เพิ่มข้อมูลพนักงาน</a></li>
					<li><a href="#page6">ลบ/แก้ไข ข้อมูลลูกค้า</a></li>
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
<<<<<<< HEAD
=======
			
<?php
if(!isset($_COOKIE [$empoyeeId])) {
    echo "empoyee '" . $empoyeeId . "' is not set!";
} else 
	{
    echo "Cookie empoyeeId '" . $empoyeeId . "' is set!<br>";
    echo "Value is empoyeeId: " . $_COOKIE[$empoyeeId];
}
?>
>>>>>>> 75f08442a8c19931760714f55bc8f81016d6fce8

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

<!-- -- -- - -- --- -- -- -- เช็คข้อมูลลูกค้า -- -- -- -- -- -- -- -- -- -- -- -->
		
		<div data-role="page" id="page2">			
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
			
			<div data-role="header">
				<a href="#defaultpanel" data-icon="bars" data-iconpos="notext">Menu</a>
				<h1>เช็คข้อมูลลูกค้า</h1>
					<a href="logout.php" class="ui-btn ui-shadow" >ออกจากระบบ</a>
			</div><!-- /header --><br>

			
 <table class="table table-hover">
	<tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันที่ขาย</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ราคา</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชำระแล้ว</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>คงเหลือ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ข้อมมูลเพิ่มเติม</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพิ่มข้อมูล</strong></FONT></center></td>
	</tr>
	<!--  -->
<?php
	$query = db()->query('SELECT customerId, adminId, cardId, name, lastName, phone, address, sex FROM customers ORDER BY customerId ASC');
echo db()->error;
while(list($customerId, $cardId, $adminId, $name, $lastName, $phone, $address, $sex) = $query->fetch_row())
{

	$query = db()->query('SELECT productId, price FROM product ORDER BY productId ASC');
echo db()->error;
while(list($productId,$price) = $query->fetch_row())
{

	$query = db()->query('SELECT dealingId, balances, paymenet, seleDate FROM dealing ORDER BY dealingId ASC');
echo db()->error;
while(list($dealingId, $balances, $paymenet, $seleDate) = $query->fetch_row())
{
?>

<tr >
		<td><center><?php echo $customerId;?></td>
		<td><center><?php echo $cardId;?></td>
		<td><center><?php echo $name;?>  <?php echo $lastName ;?></td>
		<td><center><?php echo $seleDate;?></td>
		<td><center><?php echo $price;?></td>
		<td><center><?php echo $balances;?></td>
		<td><center><?php echo $paymenet;?></td>
		<td><center><a href="chekcustomer.php?customerId=<?php echo $customerId; ?>">เช็ค</a></center></td>
		<td><center><a href="#addcustom2">เพิ่ม</a></center></td>
		
		</tr>
<?php
}
}
}
?>
</table>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

			<div data-role="footer">
				<h4>จบหน้า</h4>
			</div><!-- /footer -->
		</div>

<!-----------------เช็คข้อมูลพนักงาน----------------------------------------- -->

		<div data-role="page" id="page3">			
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
		<td><center><FONT COLOR='FF3300'><strong>ข้อมมูลเพิ่มเติม</strong></FONT></center></td>
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
		<td><center><a href="chekcustomer.php">เช็ค</a></center></td>
		<td><center><a href="#addcustom2">เพิ่ม</a></center></td>
		<td><center><a href="editadmin.php">แก้ไข</a></center></td>
		
		</tr>
<?php
}
?>
</table>

			<div data-role="footer">
				<h4>จบหน้า</h4>
			</div><!-- /footer -->
		</div>


	<!-- -------------------------เพิ่มข้อมูลลูกค้า----------------------------------- -->

		<div data-role="page" id="page4">
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

			<div id="">
 <div class="row">
   <form class="form-horizontal"action="page2.php" method="post" data-ajax="false">
   
	
	<div class="form-group">

		<label class="col-sm-2 control-label">รหัส Card:</label>
		<div class="col-sm-8">
			<input type="text" name="cardId"class="form-control"placeholder="รหัส">
		</div>
		</div>

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
		<div class="col-sm-8" placeholder="เพศ">
	<select class="form-control" name="sex" placeholder="เพศ">
  <option value="ชาย">ชาย</option>
  <option value="หญิง">หญิง</option>
</select>
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
		<label class="col-sm-2 control-label" >ราคา:</label>
		<div class="col-sm-8">
		<input type="text" name="price"class="form-control"placeholder="ราคา">
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
 
  
<?php
	$query = db()->query('SELECT customerId, adminId, cardId, name, lastName, phone, address, sex FROM customers ORDER BY customerId ASC');
while(list($customerId, $cardId, $name, $last, $phone, $address, $sex) = $query->fetch_row())
{
	$query = db()->query('SELECT dealingId, seleDate FROM dealing ORDER BY dealingId ASC');
while(list($dealingId, $seleDate) = $query->fetch_row())
	
{
	$query = db()->query('SELECT productId, price sex FROM product ORDER BY productId ASC');
while(list($productId, $price) = $query->fetch_row())

{
?>


<?php
}
}
}
?>
 </form>
 </div>
</div>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>
		

<!--------------------------------เพิ่มข้อมูลพนักงาน----------------------------------- -->

<div data-role="page" id="page5">
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
		<input type="text" name="birthday"class="form-control"placeholder="วันเกิด">
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
  <option>ชาย</option>
  <option>หญิง</option>
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


<!-----------------------------แก้ไขข้อมูลลูกค้า-------------------------------------- -->

		<div data-role="page" id="page6">			
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
			
			<div data-role="header">
				<a href="#defaultpanel" data-icon="bars" data-iconpos="notext">Menu</a>
				<h1>เช็คข้อมูลลูกค้า</h1>
					<a href="login.php?q=logout" class="ui-btn ui-shadow">ออกจากระบบ</a>
			</div><!-- /header --><br>

			
 <table class="table table-condensed">
	<tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันที่ขาย</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ราคา</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชำระแล้ว</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ยอดคงเหลือ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ลบ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>แก้ไข</strong></FONT></center></td>
	</tr>
<?php
	$query = db()->query('SELECT customerId, adminId, cardId, name, lastName, phone, address, sex FROM customers ORDER BY customerId ASC');
echo db()->error;
while(list($customerId, $cardId, $adminId, $name, $lastName, $phone, $address, $sex) = $query->fetch_row())
{

	$query = db()->query('SELECT productId, price FROM product ORDER BY productId ASC');
echo db()->error;
while(list($productId,$price) = $query->fetch_row())
{

	$query = db()->query('SELECT dealingId, balances, paymenet, seleDate FROM dealing ORDER BY dealingId ASC');
echo db()->error;
while(list($dealingId, $balances, $paymenet, $seleDate) = $query->fetch_row())
{
?>
<tr >
		<td><center><?php echo $customerId;?></td>
		<td><center><?php echo $cardId;?></td>
		<td><center><?php echo $name;?>  <?php echo $last ;?></td>
		<td><center><?php echo $seleDate;?></td>
		<td><center><?php echo $price;?></td>
		<td><center><?php echo $balances;?></td>
		<td><center><?php echo $paymenet;?></td>
		<td><center><a href="product.php">ลบ</a></center></td>
		<td><center><a href="editcustomer.php?customerId=<?php echo $customerId;?>">แก้ไข</a></center></td>
		
		</tr>
<?php
}
}
}
?>


</table>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

			<div data-role="footer">
				<h4>จบหน้า</h4>
			</div><!-- /footer -->
		</div>



<!---------------------------------ลบข้อมูลลูกค้า---------------------------------- -->


<!-----------------------------เพิ่มข้อมมูลลูกค้า2------------------------------------------>
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