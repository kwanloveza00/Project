<?php
include 'config.php';
connect_db();
?>
<form name="form1" method="post" action="student.php?show=OK&strSearch=Y">
<table width="100%" >
<tr>
<td width="36%">
<div align="right">ค้นหา :
<select name="Search2">
     <option value="Student_ID" <? if($Search2=="Student_ID"){ ?>selected<? }?>>รหัสนักศึกษา</option>
     <option value="FirstName" <? if($Search2=="FirstName"){ ?>selected<? }?>>ชื่อ</option>
     <option value="LastName" <? if($Search2=="LastName"){ ?>selected<? }?>>นามสกุล</option>
     <option value="Group_Study" <? if($Search2=="Group_Study"){ ?>selected<? }?>>กลุ่มเรียน</option>
</select></div>
</td>
<td width="64%">

     <input name="Search" type="text" size="20" value="<? echo $Search?>">
     <input type="submit" name="submit" value="Search"> ตามรหัสนักศึกษา,ชื่อ, นามสกุล, กลุ่มเรียน
</td>
</tr>
</table>
</form>