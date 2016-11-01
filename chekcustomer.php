
<?php
/*session_start();
if(!isset($_SESSION['Admin']))
{
	header('Location: index.html');
	die();
}*/
include 'config.php';
connect_db();

echo $_GET['dealingId'];
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
				<ul data-role="listview">
					<li data-icon="info" data-theme="b">
						<a href="#" data-rel="close">ปิดเมนู</a></li>
					<li><a href="page1.php">หน้าหลัก</a></li>
					<li><a href="page2.php">เช็คข้อมูลลูกค้า</a></li>
					<li><a href="page3.php">เช็คข้อมูลพนักงาน</a></li>
					<li><a href="page4.php">เพิ่มข้อมูลลูกค้า</a></li>
					<li><a href="page5.php">เพิ่มข้อมูลพนักงาน</a></li>
					<li><a href="logout.php">ออกจากระบบ</a></li>
			</div><!-- /panel -->

			<div data-role="header">
			<a href="#page1" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">กลับ</a>
				<a href="#defaultpanel-p2-2" data-icon="bars" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-left ui-icon-bars"></a>
				<h1>เช็คข้อมูลลูกค้า</h1>
			</div><!-- /header -->
<?php $num=0;
?>
<?php 
$payment_SQL =db()->query('SELECT  payment FROM payments WHERE dealingId ="'.$_GET['dealingId'].'"');
while(list($payment)=$payment_SQL->fetch_row())
	{
$num+=$payment;
//echo $payment;
	}
	//echo $num;

 $dealing_SQL =db()->query('SELECT price FROM product WHERE productId ="'.$_GET['dealingId'].'"');
while(list($price)=$dealing_SQL->fetch_row())
$num_left = $price-$num;
?>
<?php
echo $num;
?>
 <table class="table table-hover">
 <tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เบอร์</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ที่อยู่</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>เพศ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>คงเหลือ</strong></FONT></center></td>
	</tr>
	
	
<?php
	$deal_query = db()->query('SELECT dealingId, customerId, productId, seleDate FROM dealing WHERE dealingId = "'.$_GET['dealingId'].'"');
echo db()->error;
list($dealingId, $customerId, $productId, $seleDate) = $deal_query->fetch_row();
{
	$product_query = db()->query('SELECT productId, price FROM product WHERE productId = "'. $productId .'" LIMIT 1');
	echo db()->error;
	list($productId,$price) = $product_query->fetch_row();

 $customer_query = db()->query('SELECT customerId, cardId, nameCustomer, lastNameCus, phone, address, sex FROM customers WHERE customerId = "'. $customerId .'"  LIMIT 1');
list($customerId, $cardId, $nameCustomer, $lastNameCus, $phone, $address, $sex ) = $customer_query->fetch_row();
?>

<div class="container">
	<div class="row">
	<form class="form-horizontal" action="page4.php" method="post">

	<tr >
		<td><center><?php echo $cardId;?></td>
		<td><center><?php echo $nameCustomer;?>  <?php echo $lastNameCus ;?></td>
		<td><center><?php echo $phone;?></td>
		<td><center><?php echo $address;?></td>
		<td><center><?php echo $sex;?></td>
		<td><center><?php echo $num_left;?></td>
		</tr>
<?php
}
?>
</table>
	<div class="form-group">
                <div class="col-md-4"></div>
				<div class="col-md-4">
				<a href="payment.php?dealingId=<?php echo $dealingId; ?>"><input class="btn btn-warning" type="submit" value="ชำระเงิน"></a></div>
                <div class="col-md-4">
				</div>
		</div>

<!--------------------------------------------->

 <table class="table table-condensed">

 <div class="form-group">
 <div class="col-md-5"></div>
		<div class="col-sm-7">
		<h2><FONT COLOR='#ff0000'>รายการจ่าย</FONT></h2></div>
			
</div>

	<tr class="success">
		<td><center><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>ชื่อ นามสกุล</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>วันที่ชำระ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>จำนวนเงินชำระ</strong></FONT></center></td>
		<td><center><FONT COLOR='FF3300'><strong>พนักงานขาย</strong></FONT></center></td>
	</tr>

<?php
		
 $payment_query = db()->query('SELECT paymentId, dealingId, payment, paymenetDate FROM payments WHERE dealingId = "'. $_GET['dealingId'] .'" ORDER BY dealingId ASC');
echo db()->error;
while(list($paymentId, $dealingId, $payment, $paymenetDate) = $payment_query->fetch_row())
{
	

	$deal_query = db()->query('SELECT dealingId, customerId, productId, seleDate FROM dealing WHERE dealingId = "'. $dealingId .'"  LIMIT 1');
echo db()->error;
list($dealingId, $customerId, $productId, $seleDate) = $deal_query->fetch_row();

	$product_query = db()->query('SELECT productId, price FROM product WHERE productId = "'. $productId .'" LIMIT 1');
	echo db()->error;
	list($productId,$price) = $product_query->fetch_row();

	$admin_query = db()->query('SELECT adminId,name,lastName,phone,empoyeeId,password,birthday,sex,address,classId,createdBy FROM admin WHERE adminId = "'. $productId .'" LIMIT 1');
	echo db()->error;
	list($adminId,$name,$lastName,$phone,$empoyeeId,$password,$birthday,$sex,$address,$classId,$createdBy) = $admin_query->fetch_row();


	$customer_query = db()->query('SELECT customerId, cardId, nameCustomer, lastNameCus, phone, address, sex FROM customers WHERE customerId = "'.$_GET['dealingId'].'"');
list($customerId, $cardId, $nameCustomer, $lastNameCus, $phone, $address, $sex ) = $customer_query->fetch_row();


?>
<tr >
		<td><center><?php echo $dealingId;?></td>
		<td><center><?php echo $cardId;?></td>
		<td><center><?php echo $nameCustomer;?>  <?php echo $lastNameCus ;?></td>
		<td><center><?php echo $paymenetDate;?></td>
		<td><center><?php echo $payment;?></td>
		<td><center><?php echo $name;?> <?php echo $lastName ;?></td>
</tr>	
<?php
}
//echo $_GET['dealingId'];
//echo $num;
?>
</table>
  </div>
</div>
  
  
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>