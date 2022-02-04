<?php 

// connect to the database
$dbconnect = mysqli_connect('localhost', 'root', '', 'schooldb');

if(!$dbconnect){
  die('Connection Error...'. mysqli_connect_error());
}

?>