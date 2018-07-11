<?php
include 'core/init.php'; 

if(!empty($_POST['submitsignup'])){
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["name"];
		$sex = $_POST["gender"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];
		//email can't be same and must be verified
		$pwd = $_POST["password"];
		$repwd = $_POST["rpwd"];		
		$faculty = $_POST["faculty"];
		//for yc: more than 1 yc having same faculty and same year can not be registered
		$admType = $_POST["admType"];
		//both password must match
		if($pwd==$repwd){
			$encpwd = MD5($pwd);
			if($admType != "yc"){
				$year = $_POST["yearstd"];
				$batch = $_POST["batch"];
				$section = $_POST["section"];
				$rollno = $_POST["rollno"];			
				//database connection 
				$conn1 = new mysqli($hostname, $db_User, $db_Password, $database);
				// Check connection
				if ($conn1->connect_error) {
					die("Connection failed: " . $conn1->connect_error);
				}
				else{
				//from database having that email
				$data="SELECT * FROM tbl_students WHERE std_email='$email'"; 
				$data1="SELECT * FROM tbl_yc WHERE yc_email='$email'"; 
				$result=mysqli_query($conn1,$data);
				$result1=mysqli_query($conn1,$data1);
				if(mysqli_num_rows($result)==1 || mysqli_num_rows($result1)==1){
					$_SESSION['message']="Email id already exists";
					echo("Email id already exists");
					header("location:index.php?emailid already exists");
				}else{
				$data2="SELECT * FROM tbl_students WHERE std_batch='$batch',std_faculty='$faculty',std_rollNo='$rollno'";	
				$result2=mysqli_query($conn1,$data2);
				if(mysqli_num_rows($result2)==1){
					$_SESSION['message']="Invalid Student!!";
					header("location:index.php?rollnoerror");
				}else{
					
				//Student having same faculty, same batch and same section can not have same roll no
				registerstdform($name,$sex,$dob,$email,$encpwd,$faculty,$year,$batch,$rollno,$section);
				}
			}
			}}
			else{
				$year = $_POST["yearyc"];
				//database connection 
				$conn1 = new mysqli($hostname, $db_User, $db_Password, $database);
				// Check connection
				if ($conn1->connect_error) {
					die("Connection failed: " . $conn1->connect_error);
				}
				else{
				//from database having that email
				$data="SELECT * FROM tbl_yc WHERE yc_email='$email'"; 
				$data1="SELECT * FROM tbl_students WHERE std_email='$email'"; 
				$result=mysqli_query($conn1,$data);
				$result1=mysqli_query($conn1,$data1);
				if(mysqli_num_rows($result)==1 || mysqli_num_rows($result1)==1){
					$_SESSION['message']="Email id already exists";
					echo("Email id already exists");
					header("location:index.php?emailid already exists");
				}else{
				$ycdata="SELECT * FROM tbl_yc WHERE yc_year='$year',yc_faculty='$faculty'";	
				$ycresult=mysqli_query($conn1,$ycdata);
				if(mysqli_num_rows($ycresult)==1){
					$_SESSION['message']="YC already exist of this year!!";
					header("location:index.php?yc_already_exist_of_this_year_of_this_faculty");
				}else{
					
				//registering yc
				registerycform($name,$sex,$dob,$email,$encpwd,$faculty,$year);
				}
			}
				}			
		}
		}else{
			echo("Password do not match!!");
			$_SESSION['message']="Password do not match!!";
			header("location:index.php?2passworderror");
		}
}
}else if(!empty($_POST['submitlogin'])){
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$email = $_POST["loginemail"];
		$pwd = $_POST["loginpassword"];
		$accTyp = $_POST["loginadmType"];
		$encpwd = MD5($pwd);
		if(authcheck($email,$encpwd,$accTyp) == true){
			$_SESSION['loginEmail']= $email;
			$_SESSION['loginaccTyp']= $accTyp;
			header('location:index.php?loginsucess');
		}else{
			header('location:index.php?loginError');
		}
		
	}
}
if(isset($_POST['sendNotice'])){
	$notice_info=$_POST["notice_info"];
	$yc_id=$_POST["yc_id"];
	$student_fac=$_POST["student_facu"];
	$yc_year=$_POST["yc_year"];
	$date=$_POST["date"];
	setNotice($notice_info,$yc_id,$student_fac,$yc_year,$date);
}
if(isset($_POST['sendQuestion'])){
	$qid=$_POST["qid"];
	$question_info=$_POST["question_info"];
	$uid=$_POST["uid"];
	$date=$_POST["date"];
	$sub_id=$_POST["sub_id"];
	setQuestion($qid,$uid,$question_info,$date,$sub_id);
}
if(isset($_POST['sendComment'])){
	$message=$_POST["message"];
	$uid=$_POST["uid"];
	$date=$_POST["date"];
	$subid=$_POST["subid"];
	$qid=$_POST["qqid"];
	setComments($qid,$uid,$message,$date,$subid);
}
?>