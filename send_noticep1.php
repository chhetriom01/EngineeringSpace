 <?php
	session_start();
	include 'core/db_connection.php';
	include 'core/function.php';
	
	$currentEmail = $_SESSION['loginEmail'];
	$ycdata   = getCurrentYcData($currentEmail);
	$yc_id= $ycdata['yc_id'];
	$faculty = $ycdata['faculty'];
	$year = $ycdata['year'];
?>
<h2>Notice Section / Part I</h2>
<form action="formcheck.php" method="POST" enctype="multipart/form-data" >
					<input type='hidden' name='notice_id' value=''>
					<input type='hidden' name='date' value="<?php echo date('Y-m-d H:i:s') ?>">
					<input type='hidden' name='yc_id' value="<?php echo $yc_id; ?>">
					<input type='hidden' name='student_facu' value="<?php echo $faculty; ?>">
					<input type='hidden' name='yc_year' value="<?php echo $year; ?>">
					<!--yc_id and student_fac should be sent manually by retriving from its database-->
					 <!--<input type="file" name="notice_info" multiple="true" />-->
						<br><input name="notice_info" style="resize:none; height:80px; width:750px" placeholder="Type Here..."></input><br>
					 <br/><input type="submit" id = "button" name ="sendNotice"/>
</form>