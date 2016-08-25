
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">   
  <title>ระบบติดตามค่างวดสินค้า</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fileinput.min.css" rel="stylesheet">  
  <link href="css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">  
  
  <style>
	 .red
	{
		color: #ff0000;
	}
	 .green
	{
		color: #3c763d;
	}
  </style>
  
  <script src="js/plugins/canvas-to-blob.min.js"></script>
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/fileinput.min.js"></script>
  <script src="js/fileinput_locale_en.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/bootstrap-datepicker-thai.js"></script>
  <script src="js/bootstrap-datepicker.th.min.js"></script>
  
 </head>
 <body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">ปิดเมนู</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">ระบบติดตามค่างวดสินค้า</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="?q=index">หน้าหลัก</a></li>			
			</ul>
			<ul class="nav navbar-nav navbar-right">
							<li><a href="index.php?q=logout">ออกจากระบบ</a></li>
						</ul>
			</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
 <div class="container" style="margin-top: 70px;">
		<div class="row">
		<div class="well well-sm">
			<div class="row">
				<div class="col-sm-10">ยินดีต้อนรับ, นายปลื้ม ปลื้ม</div>
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="panel panel-info"> 
			<div class="panel-heading"> 
				<h3 class="panel-title">ข้อมูลลูกค้าเครื่องปั่น Aloha</h3> 			
			</div> 
			<div class="panel-body">
				<div class="row">
					<form class="form-horizontal" action="" method="post">
						<div class="form-group">

							<label class="col-sm-3 control-label">รหัส ID Card:</label>

							<div class="col-sm-6">
								<select id="subject_id" name="subject_id" class="form-control">
									
																	<option value="17">1/59 - (3901-2002A) การวิเคราะห์และออกแบบเชิงวัตถุ</option>
																	<option value="16">1/59 - (3901-2002B) การวิเคราะห์และออกแบบเชิงวัตถุ</option>
																	<option value="11">1/59 - (3901-2005A) การโปรแกรมเชิงวัตถุด้วยเทคโนโลยีจาวา</option>
																	<option value="10">1/59 - (3901-2005B) การโปรแกรมเชิงวัตถุด้วยเทคโนโลยีจาวา</option>
																	<option value="15">1/59 - (3901-2006A) การออกแบบและพัฒนาเว็บ</option>
																	<option value="12">1/59 - (3901-2006B) การออกแบบและพัฒนาเว็บ</option>
																	<option value="14">1/59 - (3901-2109A) การบริการเว็บ</option>
																	<option value="13">1/59 - (3901-2109B) การบริการเว็บ</option>
																</select>
							</div>

						</div>
						<div id="lab_list"></div>								
					</form>	
				</div>
			</div>
		</div>
		<div id="lab_send"></div>
	</div>
<script>
var g_subject_id = 0;
var g_lab_id = 0;

var options = { 
	beforeSend: function() 
	{
		//clear everything
		//$("#progress").show();

		$("#progress-bar").width('0%');
		$("#progress-bar").html("0%");
		$("#message").html('');
	},
	uploadProgress: function(event, position, total, percentComplete) 
	{
		$("#progress-bar").width(percentComplete + '%');
		$("#progress-bar").html(percentComplete + '%');
	},
	success: function() 
	{
		$("#progress").hide();
		$('#myfile').fileinput('reset');
	},
	complete: function(response) 
	{
		$('#myfile').fileinput('reset');
		$("#progress").hide();

		$.post('lab_send.php', { 'subject_id' : g_subject_id, 'lab_id' : g_lab_id }, function(data)
		{
			$.post('lab_list.php', { 'subject_id' : g_subject_id }, function(data)
			{
				$('#lab_list').html(data);
				$('#lab_id').val(g_lab_id);
				$('#lab_id').on('change', function (e) {
					var lab_id = this.value;
					g_lab_id = lab_id;
					$.post('lab_send.php', { 'subject_id' : g_subject_id, 'lab_id' : lab_id }, function(data)
					{
						$('#lab_send').html(data);		
						$("#myfile").fileinput({
							maxFileSize: 10000,
							'showUpload':true, 
							'showPreview':false
						});

						$("#myForm").ajaxForm(options);

					});
				});
			});

			$('#lab_send').html(data);		
			$("#myfile").fileinput({
				maxFileSize: 10000,
				'showUpload':true, 
				'showPreview':false
			});
			$("#myForm").ajaxForm(options);
		});
		//$("#message").html("<font color='green'>"+response.responseText+"</font>");
	},
	error: function()
	{
		$('#myfile').fileinput('reset');
		$("#progress").hide();
		$("#message").html("<font color='red'> ERROR: unable to upload files</font>");
	}
 
}; 

function remove_file(work_id)
{
	if(confirm('ต้องการลบไฟล์นี้ใช่ หรือ ไม่ ?'))
	{
		$.post('remove_file.php', { 'work_id' : work_id }, function(data)
		{
			$.post('lab_list.php', { 'subject_id' : g_subject_id }, function(data2)
			{
				$('#lab_list').html(data2);
				$('#lab_id').val(g_lab_id);
				$('#lab_id').on('change', function (e) {
					var lab_id = this.value;
					g_lab_id = lab_id;
					$.post('lab_send.php', { 'subject_id' : g_subject_id, 'lab_id' : lab_id }, function(data)
					{
						$('#lab_send').html(data);		
						$("#myfile").fileinput({
							maxFileSize: 10000,
							'showUpload':true, 
							'showPreview':false
						});

						$("#myForm").ajaxForm(options);

					});
				});
			});

			$.post('lab_send.php', { 'subject_id' : g_subject_id, 'lab_id' : g_lab_id }, function(data3)
			{
				$('#lab_send').html(data3);		
				$("#myfile").fileinput({
					maxFileSize: 10000,
					'showUpload':true, 
					'showPreview':false,
					'allowedFileExtensions': ['jpeg', 'jpg', 'png', 'gif', 'pdf', 'zip', 'rar']
				});

				$("#myForm").ajaxForm(options);

			});			
		});
	}
}

$(function()
{
	$('#subject_id').on('change', function (e) {
		var subject_id = this.value;
		g_subject_id = subject_id;
		if(subject_id <= 0)
		{
			$('#lab_list').html('');
			$('#lab_send').html('');
		}
		else
		{
			$('#lab_send').html('');

			$.post('lab_list.php', { 'subject_id' : subject_id }, function(data)
			{
				$('#lab_list').html(data);
				$('#lab_id').on('change', function (e) {
					var lab_id = this.value;
					g_lab_id = lab_id;
					$.post('lab_send.php', { 'subject_id' : g_subject_id, 'lab_id' : lab_id }, function(data)
					{
						$('#lab_send').html(data);		
						$("#myfile").fileinput({
							maxFileSize: 10000,
							'showUpload':true, 
							'showPreview':false,
							'allowedFileExtensions': ['jpeg', 'jpg', 'png', 'gif', 'pdf', 'zip', 'rar']
						});

						$("#myForm").ajaxForm(options);

					});
				});
			});
		}
	});
});
</script> </div>
 </body>
</html>