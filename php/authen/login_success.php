<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();

if (!isset($_SESSION)){
header("location:login.php");

}
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<h1>login successful</h1>
<a href="logout.php"> [logout] </a>
</body>
</html>