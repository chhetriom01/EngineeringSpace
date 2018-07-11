<?php 
	include 'core/init.php'; 
	include 'includes/overall/main_header.php';
?>
<?php include'includes/overall/estoplogo.php';
		include'includes/overall/navbar.php';
?>	

	

<!-- Sign In modal -->
 <div class="modal fade" id="myModalsignIn" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Form</h4>
        </div>
        <div class="modal-body">
          <!--login form here -->
      			<div class="login-page">
      				<div class="form">
              <?php 
                if(isset($_REQUEST["loginError"])){
                ?>
                  <h5 style="color: red;">Login Error!!!</h5>
                <?php } ?>
      					<form class="login-form" action="formcheck.php" method="POST">
      						<input type="email" placeholder="Email Address" name = "loginemail" /> <br>
      						<input type="password" placeholder="Password" name = "loginpassword" /> <br>
      						<label class="radio-inline">Student
					  			<input type="radio" name="loginadmType" value="loginstudent" checked>
					  		</label>
							<label class="radio-inline">YC
								<input type="radio" name="loginadmType" value="loginyc" >
							</label><br/><br/>
      						<input type="submit" value = "Submit" id = "button" name ="submitlogin"/>
      					</form>
      					<a href="#">Forget password</a>
      				</div>
      			</div>
			<!--Login Form Ends Here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<!--Sign Up Modal -->
<div class="modal fade" id="myModalsignUp" role="dialog">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Form</h4>
        </div>
        <div class="modal-body">
		
          <!--Registration form Here -->
			<form class="login-form" action="formcheck.php" method="POST" name="signup" onsubmit="return validate123()">
				<input type="text" placeholder="Full Name" name = "name" required/> <br>
			<label class="radio-inline"> Male
				<input type="radio" name="gender" value="male" checked>
			</label>
	  		<label class="radio-inline"> Female
				<input type="radio" name="gender" value="female">
	  		</label><br><br>
			<label> DOB</label>
				<input type="date" placeholder="Date of Birth" name = "dob" /> <br>
				<input type="text" placeholder="Email Address" name = "email" required/> <br>
				<input type="password" placeholder="Password" id="pass" name = "password" required/> <br>
				<input type="password" placeholder="Re-Type Password" id="repass" name = "rpwd" required/> <br>
				
			<label class="radio-inline">Student
	  			<input type="radio" name="admType" value="student" id="admType" checked onclick="checkycstd(this.value)">
	  		</label>
			<label class="radio-inline">YC
				<input type="radio" name="admType" value="yc" id="admType"  onclick="checkycstd(this.value)">
			</label>
	  		
			 <br><br><br>
			
			<label><b>Faculty</b></label>
				<select id="faculty1" name="faculty" required>
					<option value='' selected>Select a Faculty</option>
					<option value="bct">BCT</option>
					<option value="bex">BEX</option>
					<option value="bce">BCE</option>
					<option value="bel">BEL</option>
					<option value="arc">Arch.</option>
				</select>
			
			<div id="req">
				<label><b>Batch</b></label>
					<select id="reqbatch" name="batch" required>
						<!--<option value='' selected=""></option>-->
							<script>
								var mydate = new Date();
								var year = mydate.getFullYear();
								var batch=year+57;
								//document.write('<option selected value="'+batch+'">'+batch+'</option>');
								for(batch=batch-1;batch>2040;batch--)
								{
									document.write('<option value="'+batch+'">'+batch+'</option>');
								}
							</script> 
						</select>
						
				<label><b>Year</b></label>
				<select id="reqyearstd" name="yearstd" required>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>      
				</select>
				
				<label><b>Section</b></label>
				<select id="reqsection" name="section" required>
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
				</select>	
						
				<label><b>Roll No</b></label>
					<select id="reqroll" name="rollno" required>
						<!--<option value='' selected=""></option>-->
							<script>
								var i=1;
								document.write('<option value="'+i+'">'+i+'</option>');
								for(i=i+1;i<=88;i++)
								{
									document.write('<option value="'+i+'">'+i+'</option>');
								}
							</script>
					</select>
						
			</div>
      <div id="reqyear" style="display: none;">
        <label >Year </label>
            <select id="reqyearyc" name="yearyc" required>
		      <option value="1">1</option>
              <option value="2">2</option>
			  <option value="3">3</option>
              <option value="4">4</option>
            </select>
       
      </div>
			
				<input type="submit" value = "Submit" id = "button" name ="submitsignup"/>
			</form>
            <!--Registration Form End Here -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php
  //error displaying
  if(isset($_REQUEST["loginError"])){
  ?>
    <script type="text/javascript">
      document.getElementById("loginBtnJ").click();
    </script>
  <?php
  }
	include'includes/overall/main_footer.php';
 ?>

</body>
</html>
