<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> pdo select  </title>
		<link rel="stylesheet" href="">
	</head>
	
	<body>
	
	<?php
	include './connect.php';
	
	// เตรียมข้อมูล ไปใส่ไว้ใน $stm 
	$sql="select * from pdo_user"; 

	$stm=$con->prepare($sql);	// object $con เรียกใช้งาน method prepare()
	
	try {
		$stm->execute();	// สั่ง execute $stm 
	} catch(Exception $exc){
		echo $exc->getTraceAsString(); 	// ตรวจสอบ error ถ้ามี
	}

	while($row=$stm->fetch(PDO::FETCH_ASSOC)){	// ดึงข้อมูลมาทีละ 1 แถวเก็บอยู่ในตัวแปร $row 
		echo "id: ". $row['id'] . "<br>";
		echo "fname: ". $row['fname'] . "<br>";
		echo "lname: ". $row['lname'] . "<br>";
		echo " - - - - - - - - - - - -- - - - - - <br>"; 
	}

	// ความแตกต่างระหว่าง FETCH_ASSOC กับ FETCH_NUM คือการอ้างอิงลำดับของ Array ใน $row 
	// FETCH_NUM อ้างอิงด้วยตัวเลข เริ่มที่ 0  
	// FETCH_ASSOC อ้างอิงตามชื่อ coloum 
	// FETCH_BOTH และ อื่นๆ 
	/*
		while($row=$stm->fetch(PDO::FETCH_NUM)){	
		echo "id: ". $row['0'] . "<br>";
		echo "fname: ". $row['1'] . "<br>";
		echo "lname: ". $row['2'] . "<br>";
		echo " - - - - - - - - - - - -- - - - - - <br>"; 
	}
	*/
	?>
	
	</body>
	<script>
	
	
	</script>
</html>