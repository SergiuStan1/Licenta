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
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     //new fields
     $noInvoice = $_POST['noInvoice'];
     $companyFrom = $_POST['companyFrom'];
     $companyTo = $_POST['companyTo'];
     $paymentMethod = $_POST['paymentMethod'];
     $amount = $_POST['amount'];
     $vat = $_POST['vat'];
     $withoutVat = $_POST['withoutVat'];
     $paymentDue = $_POST['paymentDue'];
     $customerX = $_POST['customerX'];
     $descriptionInvoice = $_POST['descriptionInvoice'];
     $sql = "INSERT INTO invoice (companyFrom, companyTo, amount, vat, dateInvoice, paymentDueDate, customer, descriptionInvoice, withoutVat, noInvoice, details, paymentMethod, serieInvoice)
     VALUES ('$companyFrom','$companyTo','$amount', '$vat', NOW(), '$paymentDue', '$customerX', '$descriptionInvoice', '$withoutVat', '$noInvoice', '$details', '$paymentMethod', '$serieInvoice')";
     if (mysqli_query($conn, $sql)) {
        header("Location: view_invoice.php");
    exit;
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>