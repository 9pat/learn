<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> pdo update  </title>
		<link rel="stylesheet" href="">
	</head>
	
	<body>
	
	<?php
	require './connect.php';
	
	// เตรียมข้อมูลไว้
	$fname='John';
	$lname='Jane';
	$id='2';
	
	// เตรียมข้อมูล ไปใส่ไว้ใน $stm 
	$sql="update pdo_user set fname=?, lname=? where id=?"; 
	$stm=$con->prepare($sql);
	$stm->bindParam("1",$fname); 
	$stm->bindParam("2",$lname); 
	$stm->bindParam("3",$id); 
	
	try {
		$stm->execute();	// สั่ง execute $stm 
		echo "แก้ไขข้อมูลเรียบร้อย"; 
	} catch(Exception $exc){
		echo $exc->getTraceAsString(); 
	}
	
	?>
	
	</body>
	<script>
	
	
	</script>
</html>