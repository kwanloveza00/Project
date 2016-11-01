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

			<div class="container">
 <div class="row">
   <form class="form-horizontal"action="addpro.php" method="post">
   
	<?php
$product_query = db()->query('SELECT productId, productName,price FROM product ORDER BY productId ASC');
echo db()->error;
	?>

	<div class="form-group">
		<label class="col-sm-2 control-label" >ชื่อสินค้า</label>
		<div class="col-sm-8" placeholder="ชื่อสินค้า">
	<select class="form-control" name="productId" placeholder="ชื่อสินค้า">
	<?php
	while(list($productId, $productName,$price) = $product_query->fetch_row())
	{	?>
		
  <option value="<?php echo $productId; ?>"><?php echo $productName .' '. $price; ?></option>
  <?php
}	
?>
</select>
		<div class="col-sm-2"></div>
		</div>
	</div>

						
	
	<?php
$customers_query = db()->query('SELECT customerId, cardId, nameCustomer, lastNameCus, phone, address, sex  FROM customers ORDER BY customerId DESC');
echo db()->error;
	?>

	<div class="form-group">
		<label class="col-sm-2 control-label" >ชื่อผู้ชื้อ</label>
		<div class="col-sm-8" placeholder="ชื่อผู้ชื้อ">
	<select class="form-control" name="customerId" placeholder="ชื่อผู้ชื้อ">
	<?php
	while(list($customerId, $cardId, $nameCustomer, $lastNameCus, $phone, $address, $sex) = $customers_query->fetch_row())
	{	?>
		
  <option value="<?php echo $customerId; ?>"><?php echo $nameCustomer .' '. $lastNameCus;?></option>
  <?php
}	
?>
</select>
		<div class="col-sm-2"></div>
		</div>
	</div>

<div class="form-group">
		<label class="col-sm-2 control-label" >วันที่ชื้อ :</label>
			<div class="col-sm-8">
		<input type="date" name="seleDate"class="form-control"placeholder="วันที่ชื้อ">
	 </div>
	 </div>

		 <?php
$admin_query = db()->query('SELECT adminId, name,lastName,phone,empoyeeId,password,birthday,sex,address,classId,createdBy FROM admin ORDER BY adminId ASC');
echo db()->error;
	?>

	<div class="form-group">
		<label class="col-sm-2 control-label" >ชื่อพนักงาน</label>
		<div class="col-sm-8" placeholder="ชื่อพนักงาน">
	<select class="form-control" name="adminId" placeholder="ชื่อพนักงาน">
	<?php
	while(list($adminId, $name,$lastName,$phone,$empoyeeId,$password,$birthday,$sex,$address,$classId,$createdBy) = $admin_query->fetch_row())
	{	?>
		
  <option value="<?php echo $adminId; ?>"><?php echo $name.' '.$lastName; ?></option>
  <?php
}	
?>
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

 </div>
</div>

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>

	</body>
</html>