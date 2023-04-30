<?php
// Open a new connection to the MySQL server
$hostName = 'localhost';
$user = 'root'; 
$pass = '';
$dbName = 'hmawebdesign';
$linkDB = mysqli_connect($hostName,$user,$pass,$dbName);  
  if (mysqli_connect_error()){ //for connection error finding
  die ('There was an error while connecting to database');
  }else{
	  echo"Successfully connected to database";
  }
?>