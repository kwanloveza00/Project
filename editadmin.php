<?php
echo $_GET['adminId'];


?>

<?php
include 'config.php';
connect_db();

	$query = db()->query('SELECT adminId, name, lastName, phone, empoyeeId, birthday, sex, address, classId, createdBy FROM admin WHERE adminId = "'.$_GET['adminId'].'"');

list($adminId, $name, $lastName, $phone, $empoyeeId, $birthday, $sex, $address, $classId, $createdBy  ) = $query->fetch_row();


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
	<form class="form-horizontal" action="adminpage1.php" method="post">

	<div class="form-group">
		<div class="col-sm-6"></div>
		<h2><FONT COLOR='#ff0000'><center>แก้ไข้ข้อมูลพนักงาน<center></FONT></h2>
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
		<label class="col-sm-2 control-label"><FONT COLOR='#ff3333'>เพศ:</FONT></label>
			<div class="col-sm-8">
		<input value="<?php echo $sex; ?>" type="text" name="sex" class="form-control" placeholder="sex">
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
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
	<input type="checkbox">&nbsp;ยอมรับเงื่อนไขการใช้บริการ</div>
</div>



	<div class="form-group">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
		<input type="hidden" name="adminId" value="<?php echo $_GET['adminId'];?>">
		<input a class="btn btn-primary" type="submit" value="แก้ไข"></a></div>
	 </div>

  </form>
  </div>
</div>
  
  
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>