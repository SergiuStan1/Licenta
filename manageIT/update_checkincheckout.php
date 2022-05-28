<?php
 $servername='localhost';
 $username='2022.stan.sergiu-alexandru';
 $password='qqwwee';
 $dbname = "2022.stan.sergiu-alexandru";
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 if(!$conn){
     die('Could not Connect MySql Server:' .mysql_error());
     }
if(isset($_POST['submit']))
{    
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];   
    $employeeName = $_POST['nameEmployee'];
      $sql = "UPDATE employees SET checkIn = '$checkIn', checkOut = '$checkOut' WHERE nameEmployee = '$employeeName'";
      if(mysqli_query($conn, $sql)){
        echo "Records added successfully.";
      } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }
      //close connection
      mysqli_close($conn);
}
?>
