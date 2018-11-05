<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> pdo delete  </title>
		<link rel="stylesheet" href="">
	</head>
	
	<body>
	
	<?php
	include './connect.php';
	
	// เตรียมข้อมูลไว้
	$id=1;
	
	// เตรียมข้อมูล ไปใส่ไว้ใน $stm 
	$sql="delete from pdo_user where id=?"; 
	$stm=$con->prepare($sql);
	$stm->bindParam("1",$id); 
	
	try {
		$stm->execute();	// สั่ง execute $stm 
		echo "ลบข้อมูลเรียบร้อย"; 
	} catch(Exception $exc){
		echo $exc->getTraceAsString(); 
	}
	
	?>
	
	</body>
	<script>
	
	
	</script>
</html>