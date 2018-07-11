<?php
if(isset($_POST["filename2"])){
            $filename1 = $_POST["filename1"];
            $filename2 = $_POST["filename2"];           
            if(rename($filename1, $filename2)){
              echo "<script>location.href='index.php'</script>";
            }
          }
        ?>
          <form method="post">
            <div class="form-group">
              <input type="text" name="filename1" class="form-control" value="file1/<?php  echo $_GET['rename']; ?>" />
            </div>
             <div class="form-group">
              <input type="text" name="filename2" class="form-control" value="file1/ENTER THE NAME.txt" /><!--renamed file will be named in filename2-->
            </div>
            <input type="submit" value="rename" class="btn btn-primary" />
          </form>