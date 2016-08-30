<?php
echo $_GET['customerId'];
?>

<?php
include 'config.php';
connect_db();

	$query = db()->query('SELECT customerId, cardId, name, lastName, phone, address, sex FROM customers WHERE customerId = "'.$_GET['customerId'].'"');

list($customerId, $cardId, $name, $lastName, $phone, $address, $sex ) = $query->fetch_row();

	$query = db()->query('SELECT productId, productName,price FROM product WHERE productId = "'.$_GET['productId'].'"');

list($productId, $productName, $price) = $query->fetch_row();


	$query = db()->query('SELECT dealingId, balances, paymenet, paymenetDate, seleDate FROM dealing WHERE dealingId = "'.$_GET['dealingId'].'"');

list($dealingId, $balances, $paymenet, $paymenetDate, $seleDate) = $query->fetch_row();

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
	<form class="form-horizontal" action="customerpage1.php" method="post">

	<div class="form-group">
		<div class="col-sm-6"></div>
		<h2><FONT COLOR='#ff0000'><center>แก้ไข้ข้อมูลลูกค้า<center></FONT></h2>
		<div class="col-sm-6">
		</div>
	</div>
   
	<div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>ชื่อ:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $name; ?>"type="text" name="name" class="form-control" placeholder="name">
		</div>
	</div>
	  
	<div class="form-group">
		<label class="col-sm-2 control-label" ><FONT COLOR='#ff3333'>นามสกุล:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $lastName; ?>" type="text" name="lastName" class="form-control" placeholder="lastName">
		<div class="col-sm-2"></div>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>เบอร์ :</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $phone; ?>" type="text" name="phone" class="form-control" placeholder="phone">
		<div class="col-sm-2"></div>
	 </div>
	 </div>
	
	<div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>ที่อยู่:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $address; ?>" type="text" name="address" class="form-control" placeholder="address">
		<div class="col-sm-2"></div>
	 </div>
	 </div>

	<div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>เพศ:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $sex; ?>" type="text" name="sex" class="form-control" placeholder="sex">
		<div class="col-sm-2"></div>
	 </div>
	 </div>

	 <div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>วันที่ขาย:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $seleDate; ?>" type="text" name="seleDate" class="form-control" placeholder="seleDate">
		<div class="col-sm-2"></div>
	 </div>
	 </div>

	 <div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>ราคา:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $price; ?>" type="text" name="price" class="form-control" placeholder="price">
		<div class="col-sm-2"></div>
	 </div>
	 </div>

<div class="form-group">
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>ชื่อพนักงาน:</FONT></label>
		<div class="col-sm-8">
		<input value="<?php echo $adminId; ?>" type="text" name="adminId" class="form-control" placeholder="createdBy">
		<div class="col-sm-2"></div>
	 </div>
	 </div>

	<div class="form-group">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
		<input type="hidden" name="customerId" value="<?php echo $_GET['customerId'];?>">
		<input a class="btn btn-primary" type="submit" value="แก้ไข"></a></div>
	 </div>

  </form>
  </div>
</div>

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>