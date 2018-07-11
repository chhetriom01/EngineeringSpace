<?php
	include 'core/db_connection.php';
  //getting user data from database
  $currentEmail = $_SESSION['loginEmail'];
  $actype       = $_SESSION['loginaccTyp'];
  $yc_id = $name = $sex = $age = $faculty = $batch = $year = $rollno = $section = $email = "";
  if($actype == "loginstudent"){
    $studentdata     = getCurrentStudentData($currentEmail);
    //print_r($studentdata);

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



 
 <?php if($_SESSION['loginaccTyp'] == "loginstudent"){  ?>
<center><h1>Welcome to Student Notification Section</h1></center>
<!-- student section -->

<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">View Message</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <?php 

           //  $ycmsgdata =  getycmsg($faculty);
            
           //  $ycmsg = $ycmsgdata['ycmsg'];
           //  // foreach ($ycmsg as $amsg){
           //  //    echo $amsg; 
           //  // }
           // echo count($ycmsg);

          include('core/db_connection.php');
          $conn = new mysqli($hostname, $db_User, $db_Password, $database);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "SELECT * FROM `tbl_notice` where `student_fac` = '$faculty' ORDER BY `notice_id` DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
          // output data of each row
              $n = 1;
            while($row = $result->fetch_assoc()) {
              echo "<br>";
              echo $n . ") " .$row["notice_info"]."<br>";
              $n = $n + 1;
            }
          } 
          $conn->close();
          ?>
        </div>
        <!-- <div class="panel-footer">Reply Message</div> -->
      </div>
    </div>
  </div>

<?php }else{ ?>
<h1>Welcome to YC Notice Section</h1>
<!-- yc section -->

<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><button>Send Message</button></a>
		  <a data-toggle="collapse" href="#collapse2"><button>Update NOTES</button></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
			<?php require'ycnoticeupload.php';?>
			   <?php  if(!$success){ ?>
					<!--insert into database-->
				  <form action="formcheck.php" method="POST" enctype="multipart/form-data" >
					<input type='hidden' name='notice_id' value=''>
					<input type='hidden' name='yc_id' value="<?php echo $yc_id; ?>">
					<input type='hidden' name='student_facu' value="<?php echo $faculty; ?>">
					<!--yc_id and student_fac should be sent manually by retriving from its database-->
					 <!--<input type="file" name="notice_info" multiple="true" />-->
						<br><input name="notice_info" style="resize:none; height:80px; width:1050px" placeholder="Type Here..."></input><br>
					 <input type="submit" id = "button" name ="sendNotice"/>
				  </form>
				  <?php if($failure){
					 echo $failure_message;
				  }?>
				  <?php } ?>

        
      </div>
	  <div id="collapse2" class="panel-collapse collapse">
	  
		<?php 
		include'upnotebcty1p1m.php';
		//header('location:index.php?upnotebcty1p1m?reg=sucess');
		?>
			
		</div>
    </div>
  </div>

<?php } ?>
</div>