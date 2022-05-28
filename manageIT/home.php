<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
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
</style>
<script type="text/javascript"> 
	function display_c(){
		var refresh=1000; // Refresh rate in milli seconds
		mytime=setTimeout('display_ct()',refresh)
	}

	function display_ct() {
		var x = new Date()
		var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
		x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
		document.getElementById('ct').innerHTML = x1;
		display_c();
 	}
</script>
<body class="bg-412">
<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div class="sidebar">
					<div class="sidebar-header">
						<h3 class="centeredname">manageIT</h3>
						<body onload=display_ct();>
						<div class="sidebar-content">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active btn-purple-long" href="home.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_user.php">Add Customers</a>
							</li>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_users.php">View Customers</a>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="add_invoice.php">Add Invoice</a>
							</li>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-purple-long" href="view_invoice.php">View Invoice</a>
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
								<a class="nav-link btn-purple-long" href="checkIn_checkOut.php">Check in-Check Out</a>
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
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<h1 class="white">Home</h1>
						<p class="white">Welcome to your SMART CRM!</p>
						<span class="btn-purple-long" id='ct' ></span>
						<div class="row">
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Add a new customer</h5>
										<p class="card-text white">Add a new customer to the database.</p>
										<a href="add_user.php" class="btn-purple">Add Customer</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Add a new product</h5>
										<p class="card-text white">Add a new product to the database.</p>
										<a href="add_products.php" class="btn-purple">Add Product</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">View Products</h5>
										<p class="card-text white">Add a new order to the database.</p>
										<a href="view_products.php" class="btn-purple">
											View Products
										</a>
									</div>
								</div>
							</div>
							<br>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Add Invoices</h5>
										<p class="card-text white">Add a new invoice.</p>
										<a href="add_invoice.php" class="btn-purple">Add Invoices</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">View Invoices</h5>
										<p class="card-text white">View all your invoices.</p>
										<a href="view_invoice.php" class="btn-purple">View Invoices</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">View Tasks</h5>
										<p class="card-text white">View all your tasks.</p>
										<a href="view_tasks.php" class="btn-purple">View Task</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Add Tasks</h5>
										<p class="card-text white">Add tasks for an employee.</p>
										<a href="add_tasks.php" class="btn-purple">Add Task</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Sell Products</h5>
										<p class="card-text white">Sell products.</p>
										<a href="sell_products.php" class="btn-purple">Sell a product</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">View Employees</h5>
										<p class="card-text white">View all your employees.</p>
										<a href="view_employee.php" class="btn-purple">View Employees</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Add Employees</h5>
										<p class="card-text white">Add a freshly hired employee</p>
										<a href="add_employee.php" class="btn-purple">Add Employee</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card bgformlight">
									<div class="card-body">
										<h5 class="card-title white">Check In - Check Out</h5>
										<p class="card-text white">Check in and Check out your employees</p>
										<a href="checkIn_checkOut.php" class="btn-purple">Check In Check Out Employee</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>