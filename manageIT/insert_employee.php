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
    $nameEmployee = $_POST['nameEmployee'];
    $position = $_POST['position'];
    $dateOfEmployement = $_POST['dateOfEmployement'];
    $birthDate = $_POST['birthDate'];
    $salary = $_POST['salary'];
    
     $sql = "INSERT INTO employees (nameEmployee, position, dateOfEmployement, birthDate, salary, checkIn, checkOut, createdAt)
     VALUES ('$nameEmployee','$position','$dateOfEmployement','$birthDate','$salary', NOW(), NOW(), NOW())";
     if (mysqli_query($conn, $sql)) {
        header("Location: view_employee.php");
    exit;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>