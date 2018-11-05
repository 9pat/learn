<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> pdo insert  </title>
		<link rel="stylesheet" href="">
	</head>
	
	<body>
	
	<?php
	require './connect.php';
	
	// เตรียมข้อมูลไว้
	$fname='tom';
	$lname='hank';
	
	//	$sql="insert into pdo_user(fname, lname) value('$fname','$lnane')"; 
	
	// เตรียมข้อมูล ไปใส่ไว้ใน $stm 
	$sql="insert into pdo_user(fname, lname) value(?,?)"; 
	$stm=$con->prepare($sql);
	$stm->bindParam("1",$fname); 
	$stm->bindParam("2",$lname); 
	
	try {
		$stm->execute();	// สั่ง execute $stm 
		echo "บันทึกข้อมูลเรียบร้อย"; 
	} catch(Exception $exc){
		echo $exc->getTraceAsString(); 
	}
	
	?>
	
	</body>
	<script>
	
	
	</script>
</html>