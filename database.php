<?php
$servername='DBHOST';
$username='USERNAME';
$password='PASSWORD';
$dbname = "DBNAME";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
