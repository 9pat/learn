<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> PHP-Basic 01 </title>
		<link rel="stylesheet" href="">
	</head>
	
	<body>
	
	<?php 
	// out put
	echo "<h1>php page</h1>";
	print "<i>this is from print''</i><hr>";
	
	// variable
	$name = "patty";
	$age = 29;
	$human = true;
	
	echo "ชื่อ : " . $name . " อายุ " . $age . "<hr>";
	
	// condition : if else
	$score = 505;
	if($score == 500){
		echo "you win!"; 		
	} 
	if($score > 500 ){
		echo "your score " . $score  ." is too high";
	} 
	else {
		echo "let's try again";
	}
	echo "<p>-----</p>";
	// condition : switch case
	$score = 30;
	switch($score){
		case 300 : echo  $score . " is not winning number."; 
		break;	// break เพื่อหยุดการทำงานของแต่ละ case 
		case 400 : echo $score . " is not winning number.";
		break;
		case 500 : echo "you win !"; 
		break;
		case 600 : echo $score . " is not winning number.";
		break;
		default : echo "Oops, let's try again"; 
	}
	echo "<hr>";
	
	// loop การทำซ้ำ (เช็ค loop ก่อนแล้วค่อย ทำ)
	for($count =1 ; $count <= 5 ; $count++){
		echo "for loop" . $count . "<br>";
	}
	$score = 10;
	while($score!=15){
		echo "while != 15 " . $score . "<br>";
		$score++;
		if($score==25){
			break; 
		}
	}
		// do ก่อนแล้วค่อยเช็ค loop
	$score = 1;
	do {
		echo "patty" . $score . " | " ;
		$score++;
	} while($score!=5);
	echo "<hr>";
	
	// Array  - index
	$color = array("แดง", "เหลือง" , "เขียว" , "น้ำเงิน", "ส้ม");
	echo $color[2];
	print_r($color);	// แสดงค่า array ทั้งหมด
	
	foreach($color as $choice){
		echo "สี - $choice<br>";
	}
	
	$catalog = array("แดง"=>"rd", "เหลือง"=>"yl" , "เขียว"=>"gr" , "น้ำเงิน"=>"bu");
	print_r($catalog);
	echo $catalog["แดง"];
	
	echo "<hr>";
	// การเข้าถึงข้อมูลใน Array
	// แบบที่ 1
	$name = array("THAILAND", "ENGLAND", "JAPAN");
	foreach($name as $value){
		echo $value . "<br>";
	}
	echo "<p>----------------------------------</p>";

	// ทำ loop Array 
	$count_name = count($name);
	echo "จำนวนข้อมูล $name = " . $count_name . "<br>";
	
	// for($i=0 ; $i<$count_name ; $i++){
		
	for($i=0 ; $i<count($name) ; $i++){		// เอา function count() มานับ array ตรงๆในส่วนเงือนไขเลยก็ได้ 
		echo $name[$i] . "<br>";
	}

	echo "<p>----------------------------------</p>";
	// แบบที่ 2
	$country = array("BANGKOK"=>"THAILAND", "EN"=>"ENGLAND", "JP"=>"JAPAN");
	foreach($country as $key=>$value){
		echo "คีย์ " . $key . " " . "value = $value". " <br> " ;
	}
	
	?> 
	
	</body>
	<script>
	
	
	</script>
</html>