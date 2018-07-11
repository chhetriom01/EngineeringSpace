<?php

          if(isset($_POST["title"])){
            $filename = $_POST["title"];
            $txt = $_POST["txt"];
            $myfile = fopen($base1. '/'.$filename, 'w');
            if(fwrite($myfile, $txt)){
              echo "<script>location.href='index.php'</script>";
            }
          }
       
          include("Upoad.php");?>     
		 