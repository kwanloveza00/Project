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

<div data-role="page" id="page2">			
			<div data-role="panel" id="defaultpanel" data-display="overlay">				
				<ul data-role="listview">
					<li data-icon="info" data-theme="b"><a href="#" data-rel="close">ปิดเมนู</a></li>
					<li><a href="page1.php">หน้าหลัก</a></li>
					<li><a href="page2.php">เช็คข้อมูลลูกค้า</a></li>
					<li><a href="page3.php">เช็คข้อมูลพนักงาน</a></li>
					<li><a href="page4.php">เพิ่มข้อมูลลูกค้า</a></li>
					<li><a href="page5.php">เพิ่มข้อมูลพนักงาน</a></li>
					<li><a href="page6.php">ลบ/แก้ไข ข้อมูลลูกค้า</a></li>
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
		<td><center><FONT COLOR='FF3300'><strong>คงเหลือ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>พนักงานขาย</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ข้อมมูลเพิ่มเติม</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพิ่มข้อมูล</strong></FONT></center></td>
	</tr>
	<!--  -->
<?php
	$deal_query = db()->query('SELECT dealingId, customerId, productId, balances, paymenet, seleDate FROM dealing ORDER BY dealingId ASC');
echo db()->error;
while(list($dealingId, $customerId, $productId, $balances, $paymenet, $seleDate) = $deal_query->fetch_row())
{

	$product_query = db()->query('SELECT productId, price FROM product WHERE productId = "'. $productId .'" LIMIT 1');
	echo db()->error;
	list($productId,$price) = $product_query->fetch_row();

	$admin_query = db()->query('SELECT adminId,name,lastName,phone,empoyeeId,password,birthday,sex,address,classId,createdBy FROM admin WHERE adminId = "'. $productId .'" LIMIT 1');
	echo db()->error;
	list($adminId,$name,$lastName,$phone,$empoyeeId,$password,$birthday,$sex,$address,$classId,$createdBy) = $admin_query->fetch_row();


	$customer_query = db()->query('SELECT customerId, adminId, cardId, nameCustomer, lastName, phone, address, sex FROM customers WHERE customerId = "'. $customerId .'" LIMIT 1');
echo db()->error;
	list($customerId, $adminId, $cardId, $nameCustomer, $lastName, $phone, $address, $sex) = $customer_query->fetch_row();
?>

<tr >
		<td><center><?php echo $dealingId;?></td>
		<td><center><?php echo $cardId;?></td>
		<td><center><?php echo $nameCustomer;?>  <?php echo $lastName ;?></td>
		<td><center><?php echo $seleDate;?></td>
		<td><center><?php echo $price;?></td> 
		<td><center><?php echo $paymenet;?></td>
		<td><center><?php echo $name;?> <?php echo $lastName ;?></td>
		<td><center><a href="chekcustomer.php?customerId=<?php echo $customerId; ?>">เช็ค</a></center></td>
		<td><center><a href="addcustom2?customerId=<?php echo $customerId; ?>">เพิ่ม</a></center></td>
		
		</tr>
<?php
}
?>
</table>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

			<div data-role="footer">
				<h4>จบหน้า</h4>
			</div><!-- /footer -->
		</div>
 




  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</div>

	</body>
</html>