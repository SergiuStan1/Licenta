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
     $employeeId = $_POST['employeeId'];
     $descriptionD = $_POST['descriptionD'];
     $dateStarted = $_POST['dateStarted'];
     $dateEnded = $_POST['dateEnded'];
       if(!empty($employeeId) && !empty($descriptionD) && !empty($dateStarted) && !empty($dateEnded) && $dateEnded > $dateStarted)
         {
            $sql = "INSERT INTO tasks (employeeId, descriptionD, dateStarted, dateEnded) VALUES ('$employeeId', '$descriptionD', '$dateStarted', '$dateEnded')";
            $result = mysqli_query($conn, $sql);
            if($result)
            {
               echo "<script type='text/javascript'>alert('Data Inserted Successfully');</script>";
               echo "<script>window.location.href = 'view_tasks.php';</script>";
            }
            }
            else
            {
                  echo "<script type='text/javascript'>alert('Data Not Inserted Successfully');</script>";
                  echo "<script>window.location.href = 'view_tasks.php';</script>";
            }
         }
         else
         {
            // show pop up message if the fields are empty and refresh the page
            echo "<script type='text/javascript'>alert('Please Fill All The Fields');</script>";
            echo "<script>window.location.href = 'view_tasks.php';</script>";
         }
       /*
     $sql = "INSERT INTO tasks (custId,descriptionD,dateStarted,dateEnded)
     VALUES ('$custId', '$descriptionD','$dateStarted','$dateEnded')";
     if (mysqli_query($conn, $sql)) {
        header("Location: view_tasks.php");
    exit;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
     */
?>