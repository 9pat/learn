<!DOCTYPE html>

<html>
<head>
</head>
<body>

<h2>phone</h2>

<form action="" method="get">

	สังกัด :<br>
	<input type="text" name="dept">
	<br>
	รหัสพนักงาน :<br>
	<input type="text" name="egatid">
	<br>
	ชื่อ-นามสกุล :<br>
	<input type="text" name="name">
	<br>
	เบอร์โทรศัพท์เก่า :<br>
	<input type="text" name="oldtel">
	<br>
	เบอร์โทรศัพท์ใหม่ :<br>
	<input type="text" name="newtel">
	<br>
	<br>
	<input type="submit" name="submit" value="ค้นหา"> 
	<input type="reset" name="reset">
	<br>
	<br>

</form>

<table  cellspacing="0" border="1" id="" style="border-collapse:collapse;width:100%">
	<tbody>
		<tr style="background-color:#005e8d;color:#fff;">
			<th>สังกัด</th>
			<th>ตำแหน่ง</th>
			<th>รหัสพนักงาน</th>
			<th>ชื่อ-นามสกุล</th>
			<th>อาคาร</th>
			<th>ชั้น</th>
			<th>ห้อง</th>
			<th>เบอร์เก่า</th>
			<th>เบอร์ใหม่</th>
		</tr>
<?php 
	$dbc = 'mysql:host=localhost;dbname=phoneth;charset=utf8'; // ชื่อฐานข้อมูล database connect
	$username='tester';
	$password='tester';
	$con=new PDO($dbc, $username, $password);
?>		
<?php

// form input

	$dept = '';
	$egatid = '';
	$name = '';
	$oldtel = '';
	$newtel = '';
	
if(isset($_GET["submit"])){
	$dept = $_GET["dept"];
	$egatid = $_GET["egatid"];
	$name = $_GET["name"];
	$oldtel = $_GET["oldtel"];
	$newtel = $_GET["newtel"];
	
	if(strlen($dept) == 0 && strlen($egatid) == 0 && strlen($name) == 0 && strlen($oldtel) == 0 && strlen($newtel) == 0){
		echo "<div style='width:100%; text-align:center'><h3>กรุณาใส่ข้อมูลเพื่อค้นหา</h3></div>";
		exit;
	}
	
    // insert to db 
    $sql = "select * from phoneth where Id like '%%' 
				and dept like '%$dept %' 
				and empcode like '%$egatid%' 
				and nameth like '%$name%' 
				and telold like '%$oldtel%' 
				and telnew like '%$newtel%' ;";
	echo $sql;			
	$stm = $con->prepare($sql);
	
		try {
			$stm->execute();	// สั่ง execute $stm 
		} catch(Exception $exc){
			echo $exc->getTraceAsString(); 	// ตรวจสอบ error ถ้ามี
		}
		
		while($row=$stm->fetch(PDO::FETCH_ASSOC)){
			echo "<tr style='background-color:#eee;color:#000;'>";
			echo "<td>". $row['dept'] ."</td>";
			echo "<td>". $row['position'] ."</td>";
			echo "<td>". $row['empcode'] ."</td>";
			echo "<td>". $row['nameth'] ."</td>";
			echo "<td>". $row['building'] ."</td>";
			echo "<td>". $row['floor'] ."</td>";
			echo "<td>". $row['room'] ."</td>";
			echo "<td>". $row['telold'] ."</td>";
			echo "<td>". $row['telnew'] ."</td>";	
			echo "</tr>";
		}
}
?>
	</tbody>
</table>

</body>
</html>
