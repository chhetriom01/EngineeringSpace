<?php
$success = false;
$failure = false;
if(isset($_FILES['image'])){
     


      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("pdf","jpg","png","docx","pptx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF or PNG file.";
      }
	  
     // $maxsize = 50 * 1024 * 1024;
      if($file_size >  52428800){
         $errors[]='File size must be excately 50 MB';
      }
      
      if(empty($errors)==true){
         if(move_uploaded_file($file_tmp,"Elective III/".$file_name)){
              echo "Success";
              $success = true;

         }
         else{
            echo "file store path is not found";
         }
        
      }else{
        $failure_message = "Sorry you have not permission to upload  {$file_ext} extension.Please upload pdf,png or jpg.";
       $failure = true;
      }
   }
?>
<html>
   <body>
      <?php  if(!$success){ ?>
      <form action="" method="POST" enctype="multipart/form-data" >
         <input type="file" name="image" multiple="true" />
         <input type="submit"/>
      </form>
      <?php if($failure){
         echo $failure_message;
      }?>
      <?php } ?>
      
   </body>
</html>
