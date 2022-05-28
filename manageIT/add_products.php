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
  display: none; /* Hide the default checkbox */
}

/* Style the artificial checkbox */
label span {
  margin-top: 7px;
  height: 20px;
  width: 20px;
  border: 2px solid grey;
  display: inline-block;
  position: relative;
}

/* Style its checked state...with a ticked icon */
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
    			<h2 class="white">Add New Product</h2>
    		</div>
            <form action="insert_product.php" method="post">
						<div class="form-group">
                            <label class="white">Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="white">Manufacturing Date</label>
                            <input type="date" name="manufacturingDate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="white">Price</label>
                            <input step="any" type="number" name="price" class="form-control">
                        </div>
                        <label>
                            <input name="discounted" type='checkbox'>
                            <span></span>
                            <label class="white">Discounted</label>
                        </label>
                        <div class="form-group">
                            <label class="white">Discount</label>
                            <input step="any" type="number" name="discount" class="form-control">
                        </div>
						<br>
                        <input type="submit" class="btn btn-primary btn-purple" name="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>