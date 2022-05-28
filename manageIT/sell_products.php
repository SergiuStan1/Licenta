<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
h3 {
  color: #EEEEEE;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 15px;
}
body {
	  background-color: #222831;
}
label input {
  display: none; 
}

label span {
  margin-top: 7px;
  height: 20px;
  width: 20px;
  border: 2px solid grey;
  display: inline-block;
  position: relative;
}

[type=checkbox]:checked + span:before {
  content: '\2714';
  position: absolute;
  top: -5px;
  left: 0;
}
</style>
<body>
<div class="container-fluid">
<div class="row">
			<div class="col-md-2">
				<div class="sidebar">
					<div class="sidebar-header">
						<h3>manageIT</h3>
						<div class="sidebar-content">
                        <ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active btn-purple-long" href="home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_user.php">Add Customers</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_invoice.php">Add Invoice</a>
							</li>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_invoice.php">View Invoice</a>
							</li>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_users.php">View Customers</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_tasks.php">Add Tasks</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_tasks.php">View Tasks</a>
                            <li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_products.php">Add Products</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_products.php">View Products</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link btn-purple-long" href="sell_products.php">Sell Products</a>
							</li>
                            <li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_employee.php">View Employees</a>
							</li>
              				<li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_employee.php">Add Employees</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="logout.php">Logout</a>
							</li>
						</ul>
					</div>
					</div>
				</div>
			</div>
    <div class="col-md-10">
    	<div class="main-content">
    		<div class="main-content-header">
    			<h2 class="white">Sell Products to Customers</h2>
    		</div>
            <form action="update_products.php" method="post">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <select class="form-control" name="product_name">
                        <option>Select Product</option>\>
                        <?php 
                        $conn = mysqli_connect('localhost', '2022.stan.sergiu-alexandru', 'qqwwee', '2022.stan.sergiu-alexandru');
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        ?>
                        <?php
                        $sql = "SELECT * FROM products where sold = 0";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['productId']."'>".$row['nameProduct']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <select class="form-control" name="customer_name">
                        <option>Select Customer</option>
                        <?php
                        $sql = "SELECT * FROM customers";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='".$row['custId']."'>".$row['fname']." ".$row['lname']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary btn-purple" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>