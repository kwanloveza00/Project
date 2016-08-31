<?php
echo $_GET['customerId'];
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
 </head>
 <body>
 <table class="table table-hover">

 <tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เบอร์</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ที่อยู่</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพศ</strong></FONT></center></td>
		
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
		<h2><FONT COLOR='#ff0000'>ข้อมูลลูกค้า</FONT></h2>
		<div class="col-sm-8">
	</div>

<?php
include 'config.php';
connect_db();
//$query = db()->query('SELECT customerId, cardId, name, lastName, phone, address, sex FROM customers ORDER BY customerId ASC');
 $query = db()->query('SELECT customerId, cardId, name, lastName, phone, address, sex FROM customers WHERE customerId = "'.$_GET['customerId'].'"');
list($customerId, $cardId, $name, $lastName, $phone, $address, $sex ) = $query->fetch_row();
?>

<div class="container">
	<div class="row">
	<form class="form-horizontal" action="page4.php" method="post">

	
	
	<tr >
		<td><center><?php echo $customerId;?></td>
		<td><center><?php echo $cardId;?></td>
		<td><center><?php echo $name;?>  <?php echo $lastName ;?></td>
		<td><center><?php echo $phone;?></td>
		<td><center><?php echo $address;?></td>
		<td><center><?php echo $sex;?></td>
		
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
  
  
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>