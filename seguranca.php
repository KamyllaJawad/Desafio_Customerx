<?php
	session_start();
	if ($_SESSION['cli']=="")
	{
		header("Location: acessonegado.php");
	}
?>