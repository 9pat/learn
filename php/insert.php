<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<form action="" method="post">
    Add new title :
    <input type="text" name="title" id="title">
    <input type="submit" value="submit" name="submit">
</form>

</body>
</html>
<?php
include "connect_db.php";
header("Content-Type: charset=utf-8");

// get thai date
function ThaiDate()
	{
		$ThDay = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
		$ThMonth = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
		$a=date("w");
		$b=date("n")-1;
		$c=date("j");
		$d=date("Y")+543;
		$e=date("H:i:s",time());
		return " $c $ThMonth[$b] $d ";
	}
$date = ThaiDate();

// form input
if(isset($_POST["submit"])){
    $title=$_POST["title"];

    // insert to db 
    $sql = "insert into news_listup (title, date) value ('$title','$date')";

    if($conn->query($sql) === true){
        echo "new record added successfully";
    } else {
       echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }
}
$conn->close();

?>


