
<script>
function checklogin(){

<?php if(logged_in() == true){ ?>
	document.getElementById("askquestion").disabled = false;
	return true;
<?php }else{ ?>
	alert('You must login');
	//document.getElementById("myModal").style.visibility = "hidden";
	 document.getElementById("askquestion").disabled = true;
	return false;
<?php } ?>

}



</script>


<?php
	date_default_timezone_set('Asia/kathmandu');
	include'core/db_connection.php';
	//check connection
	$conn = new mysqli($hostname,$db_User,$db_Password,$database);
	if(logged_in() == true){
	
	if(!$conn){
	die("Error on the connection" .  $conn->connect_error);
}

				//select database
				$sql = "SELECT * FROM comments";
				$result = $conn->query($sql);
				
				$currentEmail = $_SESSION['loginEmail'];
				$actype       = $_SESSION['loginaccTyp'];
				if($actype == "loginstudent"){
					$studentdata     = getCurrentStudentData($currentEmail);
					$email		= $studentdata['email'];
				}
				else{
					$ycdata     = getCurrentYcData($currentEmail);
					$email		= $ycdata['email'];
				}
	}
	//select database
				$sql = "SELECT * FROM questions";
				$resultquestion = $conn->query($sql);
				
?>
<div class="container">
	<h2>BCT/FEEDBACKS/YEAR I/PART I/MATHEMATICS</h2>
		 <!-- Trigger the modal with a Ask Question button -->
		 
		  <button type="button" id="askquestion" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
		  style="background-color:#4dcf52" onclick="return checklogin()">Ask Question</button>		
		  <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		
			<div class="modal-dialog">			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Type your question here!</h4>
				</div>
				<div class="modal-body">				
					<!--insert into database-->
					<form action="formcheck.php" method="POST" enctype="multipart/form-data" >
						<input type='hidden' name='qid' value=''>
						<input type='hidden' name='date' value="<?php echo date('Y-m-d H:i:s') ?>">
						<input type='hidden' name='uid' value="<?php echo $email; ?>">
						<input type='hidden' name='sub_id' value="i_imath">							
					<br><input name="question_info" style="resize:none; height:80px; width:565px" placeholder="Type Here..."></input><br>
						 <input type="submit" id = "button" name ="sendQuestion"/>
				  </form>
					<!--<div id="comment-message" class="form-row">
						<textarea style="resize:none" id="t1" placeholder = "Enter question here..." rows="10" cols="77%"></textarea>
					</div>
					<a href="#"><input type="submit" name="dsubmit" id="commentSubmit" value="Post Question" onclick="aa();"></a>
					-->
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
			
		  </div>	
		
			<?php 
			$i=0;
				//fetch question from database
				if($resultquestion->num_rows > 0){
					while ($rowquestion=$resultquestion->fetch_assoc()) {
			?>
						<p><?php
						
								echo ("Questioned by: ");
								echo $rowquestion['uid']."<br/>";
								echo ("Date : "); 
								echo $rowquestion['date']."<br/>";
								$qqid=$rowquestion['qid'];
								echo ("<br/>Q.no.");
								echo $rowquestion['qid'];
								echo (". ");
								echo("<b>");
								echo $rowquestion['question_info']; 
								echo ("</b>");
								echo ("<br/>");
								$flag=false;
								
								
								?>
								
								<div id="id.<?php echo $i?>"></div>
								<button onclick='document.getElementById("id.<?php echo $i?>").innerHTML=("<?php viewcomments($qqid) ?>"),document.getElementById("id.<?php echo $i?>").style.display="block"'>View Comments</button>
								<button onclick='document.getElementById("id.<?php echo $i?>").style.display="none"'>Hide Comments</button>
								
							
						</p>
			<?php
			$i++;
				if(logged_in() == true){
				echo ("<form action='formcheck.php' method='POST' >
						<input type='hidden' name='uid' value= '$email'>
						<input type='hidden' name='qqid' value='$qqid'>
						<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<input type='hidden' name='subid' value='i_imath'>
							<textarea name='message' style='resize:none; height:80px; width:550px'; placeholder='Comment Here...'></textarea><br>
						<button type='submit' name='sendComment'>Comment</button>
					</form>");
				}
					
			?>
			
					 <!--View comments-->
					<!-- <button type="button" id="commentss"  style="background-color:#4dcf52" onclick="jArray">Ask Question</button>	-->

						  
					  
			<?php
				}
			}else{
			?>
				<tr>
					<th column = "2">No Questions yet...</th><br/>
				</tr>
			<?php
			}
			?> 
			
		</div>
