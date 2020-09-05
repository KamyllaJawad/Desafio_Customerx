<?php
	session_start();
	$_SESSION['cli']="";

	Header("Location: login.php"); 
?>