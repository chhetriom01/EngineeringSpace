<?php
session_start();
date_default_timezone_set('Asia/kathmandu');
		include('core/db_connection.php');
          $conn = new mysqli($hostname, $db_User, $db_Password, $database);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } 
		  include 'core/function.php';
		  //getting user data from database
		  $currentEmail = $_SESSION['loginEmail'];
			    $studentdata     = getCurrentStudentData($currentEmail);
				$faculty	= $studentdata['faculty'];
				$year	=$studentdata['year'];
          $sql = "SELECT * FROM `tbl_notice` where `student_fac` = '$faculty' and `year`='$year' ORDER BY `notice_id` DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
              $n = 1;
            while($row = $result->fetch_assoc()) {
              echo "</br>";
              echo $n . ") " .$row["notice_info"]."</br>";
              echo $row["date"]."</br>";
			  $n = $n + 1;
            }
			
          } 
		  else{
				echo('No notices yet!!!');
			}
          $conn->close();
?>