
function sendEmail($email, $type){

include('Mail.php');
        include('Mail/mime.php');

	

	$email = input_check($email);
	if(checkEmail($email) != false){
	$name = ucwords(getNameByEmail($email));
	$c = split("-", $type);
	$linkcode = $c[1];
	$link = "http://www.bnebabysitter.com/activation.php?email=".$email."&activation_code=".$linkcode;
	
}
	//$body = $headers1 = $subject = "";

	if($c[0] == "welcome"){
		
        // Constructing the email
        $sender = "From : Brisbane Brisbane <donotreply@bnebabysitter.com.au>";                              
        $recipient = $email;                    
        $subject = "Register Sucessfully";                                            
       // $text = 'This is a text message.'; 

        $html = "<html>
				<head>
				</head>
				<body>
					<p>Hi<b> ".$name.",</b>
					<br><br>
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome to Brisbane Babysitter Sitter website. Please, login with your email address and complete futher registeration. We would like to 'Thank You' for choosing Brisbane Babysitter Website. Please activate your email address.<br><br>
					Click this link to activate your email address <u><a href = '".$link."'> Activate Now</a></u><br><br>
					Thanks,<br>-Brisbane Babysitter Team</></p>
				</body>
				</html>";  
        

        $crlf = "\n";
        $headers = array(
                        'From'          => $sender,
                        'Return-Path'   => $sender,
                        'Subject'       => $subject
                        );

        // Creating the Mime message
        $mime = new Mail_mime($crlf);

        // Setting the body of the email
        //$mime->setTXTBody($text);
        $mime->setHTMLBody($html);

        $body = $mime->get();
        $headers = $mime->headers($headers);

        // Sending the email
        $mail =& Mail::factory('mail');
        $mail->send($recipient, $headers, $body);
    }
}

function activateAccount($email,$code){
	include('core/database/db_connection.php');
	mysql_connect($hostname,$db_User,$db_Password) or die("Server Connection Error <br />" . mysql_error());
	mysql_select_db($database) or die("Database Selection Error <br />" . mysql_error());

	$email = mysql_real_escape_string($email);
	$code = mysql_real_escape_string($code);
	$query = mysql_query("select * from `tbl_userinfo` where `user_email` = '$email' and `email_code`='$code' and `account_active` = '0'");
	if(mysql_num_rows($query) === 1){		
		mysql_query("UPDATE `tbl_userinfo` SET `account_active` = '1' where `user_email` = '$email'");
		return true;
	}else{
		return false;
	}
}

