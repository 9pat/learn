<?php 
// สร้าง object จาก class pdo_drivers

$dbc = 'mysql:host=localhost;dbname=learn'; // ชื่อฐานข้อมูล database connect
$username='learn';
$password='learn';

// $con=new PDO($dbc, $username, $password);

try {
	$con=new PDO($dbc, $username, $password);
	//echo "เชื่อมต่อสำเร็จ";
} catch(Exception $ex) {
	echo $ex->getMessage();
}

?>