<?php
session_start();
	include 'core/db_connection.php';
	include 'core/function.php';
  //getting user data from database
  $currentEmail = $_SESSION['loginEmail'];
  $actype       = $_SESSION['loginaccTyp'];
  $yc_id = $name = $sex = $age = $faculty = $batch = $year = $rollno = $section = $email = "";
  if($actype == "loginstudent"){
    $studentdata     = getCurrentStudentData($currentEmail);
    
    //basic info
	
    $name		= $studentdata['name'];
    $age		= $studentdata['age'];
    $sex		= $studentdata['sex'];
    $faculty	= $studentdata['faculty'];
    $batch		= $studentdata['batch'];
    $year		= $studentdata['year'];
    $rollno		= $studentdata['rollno'];
    $email		= $studentdata['email'];

  }else if($actype == "loginyc"){
    $ycdata   = getCurrentYcData($currentEmail);

    //basic info
	
	 $yc_id= $ycdata['yc_id'];
    $name = $ycdata['name'];
    $age = $ycdata['age'];
    $sex = $ycdata['sex'];
    $faculty = $ycdata['faculty'];
    $year = $ycdata['year'];
    $email = $ycdata['email'];
  }
?>
<div>

<div>
	Personal Details <br>
	Name = <?php echo $name; ?> <br>
	Sex = <?php echo $sex; ?> <br>
	DOB = <?php echo $age; ?> <br>
	Email = <?php echo $email; ?> <br>
	Faculty = <?php echo $faculty; ?> <br>
	Year = <?php echo $year; ?> <br>
	<?php if($batch){?>
				Batch = <?php echo $batch; }?> <br>
	<?php if($rollno){?>
				Roll No = <?php if($rollno)echo $rollno; }?> <br>
	<?php if($section){?>
				Section = <?php echo $section; }?> <br>
</div>
