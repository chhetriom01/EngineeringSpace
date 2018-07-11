<?php
	include 'core/db_connection.php';
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

   <style>
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {

}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
    background: #F1F3FA;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #F1F3FA;
  min-height: 460px;
}
  
 
 
  </style> 

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="default-avatar.png" class="img-responsive" alt="User Profile Picture">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $name; ?> <br>
					</div>
					<div class="profile-usertitle-job">
						<?php	if($actype == "loginyc"){	?>
						Year Coordinator
						<?php	}else if($actype == "loginstudent"){	?>
						Student
						<?php }	?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS 
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				-->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="personal_detail.php" target="iframeinfo">
							<i class="glyphicon glyphicon-user"></i>
							My Account	</a>
						</li>
						
						<?php	if($actype == "loginyc"){	?>
						
						<li>
							<a href="send_noticep1.php" target="iframeinfo">
							<i class="glyphicon glyphicon-envelope"></i>
							 Send Notice</a>
						</li>
						<li>
							<a href="upnotebcty1p1m.php" target="iframeinfo">
							<i class="glyphicon glyphicon-ok"></i>
							Update Notes </a>
						</li>
						<li>
							<a href="send_noticep1.php" target="iframeinfo">
							<i class="glyphicon glyphicon-ok"></i>
							Update Slides </a>
						</li>
						<li>
							<a href="send_noticep1.php" target="iframeinfo">
							<i class="glyphicon glyphicon-ok"></i>
							Update Old-Questions </a>
						</li>
						<li>
							<a href="send_noticep1.php" target="iframeinfo">
							<i class="glyphicon glyphicon-setting"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="send_noticep1.php" target="iframeinfo">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
						
						<?php }else if($actype == "loginstudent"){	?>
						<li>
							<a href="viewnoticep1.php" target="iframeinfo">
							<i class="glyphicon glyphicon-envelope"></i>
							 View Notice</a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
				<iframe id="iframedata" name="iframeinfo" style="width: 780px; height: 500px;"></iframe>
			</div>
		</div>
	</div>
</div>

<br>
<br>
	 
<!--https://bootsnipp.com/snippets/featured/user-profile-sidebar-->