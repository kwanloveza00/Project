<?php
echo $_GET['id'];

?>

<?php
include 'config.php';
connect_db();

$query = db()->query('SELECT id, ProductName, Saledate, price, Paymentdate, Payment, balance, staffname FROM product WHERE ID = "'.$_GET['id'].'"');
list($id, $cardid, $name, $last, $phone, $address, $sex, $saletime, $price, $balances, $payment, $paymentdeat, $staffname) = $query->fetch_row();

?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
 </head>
 <body>

<div class="container">
	<div class="row">
	<form class="form-horizontal" action="page4.php" method="post">

	<div class="form-group">
		<div class="col-sm-6"></div>
		<h2><FONT COLOR='#ff0000'><center>แก้ไข้ข้อมูลลูกค้า<center></FONT></h2>
		<div class="col-sm-6">
		</div>
	</div>
   
<td><center><?php echo $id;?></td>
		<td><center><?php echo $cardid;?></td>
		<td><center><?php echo $name;?>  <?php echo $last ;?></td>
		<td><center><?php echo $saletime;?></td>
		<td><center><?php echo $price;?></td>
		<td><center><?php echo $payment;?></td>
		<td><center><?php echo $balances;?></td>
		<td><center><a href="#addcustom2">เช็ค</a></center></td>
		<td><center><a href="#addcustom2">เพิ่ม</a></center></td>


	<div class="form-group">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
		<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		<input a class="btn btn-primary" type="submit" value="แก้ไข"></a></div>
	 </div>

  </form>
  </div>
</div>
  
  
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>