<?php
$success = false;
$failure = false;
if(isset($_FILES['uploadfile'])){
     


      $errors= array();
      $file_name = $_FILES['uploadfile']['name'];
      $file_size =$_FILES['uploadfile']['size'];
      $file_tmp =$_FILES['uploadfile']['tmp_name'];
      $file_type=$_FILES['uploadfile']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['uploadfile']['name'])));
      
      $expensions= array("pdf","jpg","png","pptx","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF,PNG,PPTX,DOCX,JPG or PNG file.";
      }
	  
     // $maxsize = 50 * 1024 * 1024;
      if($file_size >  52428800){
         $errors[]='File size must be excately 50 MB';
      }
      
      if(empty($errors)==true){
         if(move_uploaded_file($file_tmp,"uploaded_files/".$file_name)){		//specific yc corresponding folder
              echo "Success";
              $success = true;

         }
         else{
            echo "file store path is not found";
         }
        
      }else{
        $failure_message = "Sorry you have not permission to upload  {$file_ext} extension.Please upload pdf,png,pptx,docx or jpg.";
       $failure = true;
      }
   }
?>

