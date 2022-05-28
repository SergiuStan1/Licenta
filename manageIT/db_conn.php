<?php 

$sName = "localhost";
$uName = "2022.stan.sergiu-alexandru";
$pass = "qqwwee";
$db_name = "2022.stan.sergiu-alexandru";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}