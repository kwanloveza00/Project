<?php
include 'config.php';
connect_db();
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
</head>
 <body background="14.jpg">
 <div class="container">
 <div class="row">
   <form class="form-horizontal"action="page2.php" method="post">
   
	<div class="form-group">
		<div class="form-group">
		<div class="col-sm-12">
		
		<h1><center>เพิ่มข้อมูลลูกค้า</center></h1>
		</div>
	</div>

		<label class="col-sm-2 control-label">รหัส Card:</label>
		<div class="col-sm-4">
			<input type="text" name="card"class="form-control"placeholder="card">
		</div>

	<div class="form-group">
		<label class="control-label">:ชื่อลูกค้า</label>
			<div class="col-sm-4">
		<input type="text" name="name"class="form-control"placeholder="name">
		</div>
	</div>
	</div>

		<div class="form-group">
		<label class="col-sm-2 control-label">สินค้า:</label>
			<div class="col-sm-4">
		<input type="text" name="product"class="form-control"placeholder="product">
		</div>
	
	<div class="form-group">
		<label class="control-label">:ราคา </label>
			<div class="col-sm-4">
		<input type="text" name="price"class="form-control"placeholder="price">
	 </div>
	</div>
	</div>


<div class="form-group">
		<label class="col-sm-2 control-label">ชำระแล้ว :</label>
			<div class="col-sm-4">
		<input type="text" name="balances"class="form-control"placeholder="balances">
	 </div>

	<div class="form-group">
		<label class="control-label">:คงเหลือ</label>
			<div class="col-sm-4">
		<input type="text" name="pay"class="form-control"placeholder="pay">
	 </div>

		 </div>
	      
                 
            <div class="form-group">
                <div class="col-md-6"></div>
                <div class="col-md-6">
				<input  a class="btn btn-warning" type="submit" value="เพิ่ม"></a></div>

				</ul>
			<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php?q=logout">ข้อมูลลูกค้า</a></li>
						</ul>
		
		</ul>
			<ul class="nav navbar-nav navbar-left">
							<li><a href="login.php?q=logout">อกกจากระบบ</a></li>
						</ul>
		

		<!--<div class="col-md-2">
		    <div class="col-md-2">
			<div class="col-md-8"></div>
			<a href="logout.php">
	<input a class=""value="logout"></a></div>
	 </div>
-->
  </form>
  
<?php
$query = db()->query('SELECT id, card, name, product, price, balances, pay FROM vip1 ORDER BY id ASC');
while(list($id, $card, $name, $product, $price, $balances, $pay) = $query->fetch_row())
{
?>

<!--<table class="table table-bordered">
<tr>
	<td><strong>ID</strong></td>
	<td><strong>Bookname</strong></td>
	<td><strong>Author</strong></td>
	<td><strong>ISBN</strong></td>
	<td><strong>Groupbook</strong></td>
	<td><strong>แก้ไข</strong></td>
</tr>




<tr>
	<td><?php echo $id;?></td>
	<td><?php echo $card;?></td>
	<td><?php echo $name;?></td>
	<td><?php echo $product;?></td>
	<td><?php echo $price;?></td>
	<td><?php echo $balances;?></td>
	<td><?php echo $pay;?></td>
	<td><a href="edit.php?id=<?php echo $id;?>">แก้ไข</a></td>
</tr>

<?php
}
?>

</table>
-->
 </div>
</div>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>