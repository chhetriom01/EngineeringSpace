<?php include 'includes/overall/main_header.php';?>
<h2>BCT/NOTES/YEAR III/PART II/DBMS</h2>   
   <div class="container">
      <?php
        $base1 = 'file1'; 
        $page = isset($_GET['p'])? $_GET['p'] : '' ;
		//Make writeable and then add that is include upoad.php
        if($page == 'add'){
          if(isset($_POST["title"])){
            $filename = $_POST["title"];
            $txt = $_POST["txt"];
            $myfile = fopen($base1. '/'.$filename, 'w');
            if(fwrite($myfile, $txt)){
             ?> <base target="_self" /><?php
            }
          }
        ?>
          <?php	include("Upoad.php");?>     
		  
        <?php
        }else if($page == 'rename'){
            if(isset($_POST["filename2"])){
            $filename1 = $_POST["filename1"];
            $filename2 = $_POST["filename2"];           
            if(rename($filename1, $filename2)){
              ?><base target="_parent" /><?php
            }
          }
        ?>
          <form method="post">
            <div class="form-group">
              <input type="text" name="filename1" class="form-control" value="file1/<?php  echo $_GET['rename']; ?>" />
            </div>
             <div class="form-group">
              <input type="text" name="filename2" class="form-control" value="file1/ENTER THE NAME.pdf" /><!--renamed file will be named in filename2-->
            </div>
            <input type="submit" value="rename" class="btn btn-primary" base target="_parent"/>
          </form>
        <?php
        }else{
      ?>
      <p><a href="?p=add" class="btn btn-primary" >Add New File</a></p>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th width="40">S.N</th>
            <th>Name File</th>
            <th width="200">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(isset($_GET['delete'])){
            if(unlink($base1.'/'.$_GET['delete'])){
				?><base target="_parent" /><?php
            }
          }         
          if(is_dir($base1)){
            if($dr = opendir($base1)){
              $no = 1;
              while($th = readdir($dr)){
                if($th != '.' && $th != '..'){
            ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $th ?></td>
            <td>              
              <a href="?rename=<?php echo $th ?>&p=rename" class="btn btn-warning">Rename</a>              
              <a href="?delete=<?php echo $th ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          <?php
                }
              }
            }
          }
          ?>
        </tbody>
      </table>
      <?php
        }
      ?>
    </div>
