<?php 
//User session in ['user']
if(isset($_SESSION["myusername"])){
  session_start();
  session_unset();
  session_destroy();
  session_write_close();
  setcookie(session_name(),'',0,'/');
  session_regenerate_id(true);
}

if (!isset($_SESSION)){
	echo "logout successful";
} else {
	echo "you r still in";
}

//header("location:login.php");
?>
