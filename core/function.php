<?php
require 'core/db_connection.php';

function registerstdform($name,$sex,$dob,$email,$pwd,$faculty,$year,$batch,$rollno,$section){

	include('core/db_connection.php');
	$conn1 = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn1->connect_error) {
		die("Connection failed: " . $conn1->connect_error);
	}

	$sql1 = "INSERT INTO tbl_students (std_id, std_fullname, std_rollNo, std_birthday, std_gender, std_faculty, std_batch, std_year, std_section, std_email, std_pwd)
	VALUES ('', '$name', '$rollno','$dob','$sex', '$faculty', '$batch','$year', '$section' ,'$email','$pwd')";
	

	if((($conn1->query($sql1)) == TRUE )){
		header('location:index.php?reg=sucess');
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn1->error;
	}

	$conn1->close();

}


function registerycform($name,$sex,$dob,$email,$pwd,$faculty,$year){
	include('core/db_connection.php');
	$conn1 = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn1->connect_error) {
		die("Connection failed: " . $conn1->connect_error);
	}

	$sql1 = "INSERT INTO tbl_yc (yc_id, yc_fullname, yc_birthday, yc_gender, yc_faculty,  yc_year, yc_email, yc_pwd)
	VALUES ('', '$name', '$dob', '$sex', '$faculty','$year' ,'$email','$pwd')";
	

	if((($conn1->query($sql1)) === TRUE )){
		header('location:index.php?reg=sucess');
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn1->error;
	}

	$conn1->close();
}

function authcheck($email,$pwd,$acctype){

	include('core/db_connection.php');
	$db = mysqli_connect($hostname, $db_User, $db_Password, $database);

	if($acctype == "loginstudent"){
		$sql = "select * from tbl_students where std_email = '$email' and std_pwd = '$pwd'";
	}else if($acctype == "loginyc"){
		$sql = "select * from tbl_yc where yc_email = '$email' and yc_pwd = '$pwd'";
	}

	 	$result = mysqli_query($db,$sql);
      	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	$count = mysqli_num_rows($result);		
      	if($count == 1) {
      		return true;
      	}else{
      		return false;
      	}
}


function logged_in(){
	return (isset($_SESSION['loginEmail'])) ? true : false;
}


function getCurrentStudentData($currentEmail){
	include('core/db_connection.php');
	$conn = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM `tbl_students` where `std_email` = '$currentEmail'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			$currentStudentData = array('name' => $row["std_fullname"], 'age' => $row["std_birthday"], 'sex' => $row["std_gender"], 'faculty' => $row["std_faculty"], 'batch' => $row["std_batch"], 'year' => $row["std_year"], 'rollno'=> $row["std_rollNo"], 'email'=> $row["std_email"]);
		return $currentStudentData;
		}
	} 
	$conn->close();
}

function getCurrentYcData($currentEmail){
	include('core/db_connection.php');
	$conn = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM `tbl_yc` where `yc_email` = '$currentEmail'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		while($row = $result->fetch_assoc()) {
			$currentYcData = array('yc_id' => $row["yc_id"], 'name' => $row["yc_fullname"], 'age' => $row["yc_birthday"], 'sex' => $row["yc_gender"], 'faculty' => $row["yc_faculty"], 'year' => $row["yc_year"], 'email'=> $row["yc_email"]);
		return $currentYcData;
		}
	} 
	$conn->close();
}

function setNotice($notice_info,$yc_id,$student_fac,$year,$date){
	include('core/db_connection.php');
	$conn1 = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn1->connect_error) {
		die("Connection failed: " . $conn1->connect_error);
	}

	$sql1 = "INSERT INTO tbl_notice (notice_id,yc_id,notice_info,student_fac,year,date) values('','$yc_id','$notice_info','$student_fac','$year','$date')";
	

	if((($conn1->query($sql1)) == TRUE )){
		header('location:http://localhost/finalESPROJECT/index.php?noticesend');
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn1->error;
	}

	$conn1->close();
	}
function setComments($qid,$uid,$message,$date,$subid){
	include('core/db_connection.php');
	$conn = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
			
			$sql = "INSERT INTO comments (cid,qid,uid,date,message,subid) VALUES('','$qid','$uid','$date','$message','$subid')";
			//$result=mysqli_query($conn,$sql);
			if((($conn->query($sql)) == TRUE )){
		header('location:http://localhost/finalESPROJECT/index.php?commentsend');
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	}	
	
	function setQuestion($qid,$uid,$question_info,$date,$subid){
	include('core/db_connection.php');
	$conn1 = new mysqli($hostname, $db_User, $db_Password, $database);
	// Check connection
	if ($conn1->connect_error) {
		die("Connection failed: " . $conn1->connect_error);
	}

	$sql1 = "INSERT INTO questions (qid,uid,question_info,date,subid) values('','$uid','$question_info','$date','$subid')";
	

	if((($conn1->query($sql1)) == TRUE )){
		header('location:http://localhost/finalESPROJECT/index.php?questionsaved');
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn1->error;
	}

	$conn1->close();
	}


	function getycmsg($faculty){
		// echo $faculty;
		include('core/db_connection.php');
		$conn = new mysqli($hostname, $db_User, $db_Password, $database);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM `tbl_notice` where `student_fac` = '$faculty'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$currentYcMsgData = array('ycmsg' => $row["notice_info"]);
			return $currentYcMsgData;
			}
		} 
		$conn->close();
	}
	function viewcomments($qqid)
	{
		include('core/db_connection.php');
		$conn = new mysqli($hostname, $db_User, $db_Password, $database);		
			$fetchcom="select *from comments where qid='$qqid'";
			
								$fetchcomment = $conn->query($fetchcom);
								if($fetchcomment->num_rows > 0){
									while ($rowcomment=$fetchcomment->fetch_assoc()) {
										
										echo ("<br/>");
										echo ("Answered by : "); 
										echo $rowcomment['uid']."</br>";
										//echo '<p align="right">Date :'.$rowcomment['date']; 
										echo $rowcomment['date'].'!<br/>';
										echo ("<br/>");
										echo $rowcomment['message'];
										echo ("<br/>");	
										

									}
								}
							
					return true;	
	}
?>

