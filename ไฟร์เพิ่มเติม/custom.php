<?php
include 'config.php';
connect_db();
session_start();

/*if(!isset($_SESSION['login']))
{
//header('Location:index.html');
die();
}*/

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
	<form class="form-horizontal" action="page2.php" method="post">

<div class="form-group">
<div class="col-sm-10">	</div>
<div class="col-sm-2">
	<a href="logout.php">เพิ่มข้อมูล</a></div>
</div>

	<div class="form-group">
		<div class="col-sm-6"></div>

	<div class="container">
	<div class="row">
	<form class="form-horizontal" action="page2.php" method="post">

<div class="form-group">
<div class="col-sm-10">	</div>
<div class="col-sm-2">
	<a href="logout.php">logout</a></div>
</div>

	<div class="form-group">
		<div class="col-sm-6"></div>
		

  </form>
  </div>
</div>
  
  <table class="table table-striped">
	<tr class="success">
		<td><FONT COLOR='FF3300'><strong>ลำดับ</strong></FONT></td>
		<td><FONT COLOR='FF3300'><strong>รหัสการ์ด</strong></FONT></td>
		<td><FONT COLOR='FF3300'><strong>ชื่อผู้ชื้อ</strong></FONT></td>
		<td><FONT COLOR='FF3300'><strong>รายการสินค้า</strong></FONT></td>
		<td><FONT COLOR='FF3300'><strong>ราคา</strong></FONT></td>
		<td><FONT COLOR='FF3300'><strong>ชำระแล้ว</strong>
		</FONT></td>
		<td><FONT COLOR='FF3300'><strong>ยอดคงเหลือ</strong></FONT></td>
		<td><FONT COLOR='FF3300'><strong>เพิ่มยอด</strong>
		</FONT></td>
	</tr>
<?php
$query = db()->query('SELECT id, card,  name, product, price, balances, pay FROM vip1 ORDER BY id ASC');

echo db()->error;
while(list($id, $card, $name, $product, $price,$balances,$pay) = $query->fetch_row())
{
?>
<tr class="info">
		<td><?php echo $id;?></td>
		<td><?php echo $card;?></td>
		<td><?php echo $name;?></td>
		<td><?php echo $product;?></td>
		<td><?php echo $price;?></td>
		<td><?php echo $pay;?></td>
		<td><?php echo $balances;?></td>
		<td><a href="edit.php?id=<?php echo $id;?>">แก้ไข</a></td>
		</tr>
<?php
}
?>

</table>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>