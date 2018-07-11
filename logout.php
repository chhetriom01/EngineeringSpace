<?php
	session_start();
	if((isset($_SESSION["loginaccTyp"]))&&(isset($_SESSION["loginEmail"])))
{
		session_destroy();
		header('location:index.php?logout');
	}
?>