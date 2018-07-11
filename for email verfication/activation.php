<?php 
	include 'core/init.php';
	include 'includes/overall/main_header.php';

	if(logged_in() == true){	
		header('location:news_feed.php');
	}else{
		if(isset($_GET['email'], $_GET['activation_code']) === true){
			$email = $_GET['email'];
			$code = $_GET['activation_code'];
			if(user_exists($email) === false){
				//echo(user_exists($email));
				header('location:index.php?activateEmailnotfound'.hashData("activateErrorEmailMessage"));
			}else{
				if(activateAccount($email,$code) === false)  {
					header('location:index.php?activateError'.hashData("activationErrorMessage"));

				}else{
					header('location:index.php?activateSuccess'.hashData("activationSuccessMessage"));
				}
			}
		}else{
			header('location:index.php?noactivatecode'.hashData("noActivationMessage"));
			exit();
		}
} 
	?>