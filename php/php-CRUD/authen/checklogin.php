<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>login : </h1>
<?php
include "../connect_db.php";
echo "<br>";
session_start();
$tbl_name = "members";

// Define $myusername and $mypassword 
if(isset($_POST['submit'])){
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
}
// encrypt password -- replace this in $sql 
// $password="john856";
// $encrypt_password=md5($password);

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = $conn->real_escape_string($myusername);
$mypassword = $conn->real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=$result->num_rows;;

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername'] = $myusername;
$_SESSION['mypassword'] = $mypassword; 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}

$conn->close();
?>


</body>
</html>