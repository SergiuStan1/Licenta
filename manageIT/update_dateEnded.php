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
    $employeeID = $_POST['employeeID'];
    $sql = "UPDATE tasks SET dateEnded = NOW() WHERE employeeId = '$employeeID'";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('Data Updated Successfully');</script>";
        echo "<script>window.location.href = 'view_tasks.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Not Updated Successfully');</script>";
        echo "<script>window.location.href = 'view_tasks.phps';</script>";
    }

}
?>