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
    $name = $_POST['name'];
    $manufacturingDate = $_POST['manufacturingDate'];
    $price = $_POST['price'];
    $discounted = $_POST['discounted'];
    $discount = $_POST['discount'];
    if ($discounted == "on")
        $discounted = 1;
    else
        $discounted = 0;
    $sql = "INSERT INTO products (nameProduct, manufacturingDate, price, discounted, discount, sold, soldTo)
    VALUES ('$name', '$manufacturingDate', '$price', '$discounted', '$discount', 0, 0)";
    if (mysqli_query($conn, $sql)) {
       header("Location: view_products.php");
   exit;
    } else {
       echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>