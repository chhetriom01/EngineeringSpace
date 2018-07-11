
<?php
$nm=$_GET["nm"];


mysql_connect("localhost","root","");
mysql_select_db("db_es");
mysql_query("insert into comments values('$nm')");

?>
