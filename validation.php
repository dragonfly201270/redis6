<?php

if(isset($_POST['user']) && isset($_POST['pass']))
{
	session_start();
	$_SESSION['user']= time();
	//create session for user
	header("Location:index.php");
}
?>
