<?php
$hName = "localhost";
$uName = "2022.stan.sergiu-alexandru";
$password = "qqwwee";
$dbName = "2022.stan.sergiu-alexandru";
$dbCon = mysqli_connect($hName,$uName,$password,"$dbName");
  if(!$dbCon){
      die('Could not Connect MySql Server:' .mysql_error());
  }
$query="select * from tasks limit 50"; // Fetch all the data from the table customers
$result=mysqli_query($dbCon,$query);
?>