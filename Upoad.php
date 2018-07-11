<?php
$success = false;
$failure = false;
if(isset($_FILES['file'])){
     


      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
	  $file="file1";
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));//get uploaded file ext
      
      $allowed_ext= array("pdf","jpg","png","pptx","docx");
      
      if(in_array($file_ext,$allowed_ext)=== false){
         $errors[]="extension not allowed, please choose a JPG, PDF, PNG, PPTX or DOCX file.";
      }
	  
     // $maxsize = 50 * 1024 * 1024;
      if($file_size >  52428800){
         $errors[]='File size must be excately 50 MB';
      }
      
      if(empty($errors)==true){
         if(move_uploaded_file($file_tmp,"$file/".$file_name)){ //variable $file will be as per the yc year 
              echo "Success";
              $success = true;
				?><base target="_iframeinfo" /><?php
         }
         else{
            echo "file store path is not found";
         }
        
      }else{
        $failure_message = "Sorry you have not permission to upload  {$file_ext} extension.Please upload JPG, PDF, PNG, PPTX or DOCX file.";
       $failure = true;
      }
   }
?>

      <?php  if(!$success) ?>
	  
      <form action="" method="POST" enctype="multipart/form-data"  >

         <input  class="btn btn-primary" type="file" name="file" multiple="true"  />
		 <br style="Right">
		 <input  class="btn btn-info" type="submit" base target="_parent"/>
		
		 
      </form>
      <?php if($failure){
         echo $failure_message;
      }?>
      <?php  ?>

