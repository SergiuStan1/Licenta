<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
		body {
			background-color: #222831;
		}
		form {
			background-color: #393E46;
		}
		h3 {
		color: #EEEEEE;
		text-align: center;
		font-family: 'Open Sans', sans-serif;
		font-size: 30px;
		font-weight: 300;
		margin-bottom: 15px;
		}
</style>
<body>
<div class="container-fluid">
<div class="row">
			<div class="col-md-2">
				<div class="sidebar">
					<div class="sidebar-header">
						<h3 class="white">manageIT</h3>
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
        <div class="content">
            <div class="content-header">
                <h3>Invoices</h3>
            </div>
			<table class="table">
              <thead>
                <tr>
                  <th class="white" scope="col">Invoice No.</th>
                  <th class="white" scope="col">Company From</th>
				  <th class="white" scope="col">Company To</th>
                  <th class="white" scope="col">Amount</th>
                  <th class="white" scope="col">VAT</th>
                  <th class="white" scope="col">Without VAT</th>
                  <th class="white" scope="col">Date</th>
                  <th class="white" scope="col">Payment Due Date</th>
                  <th class="white" scope="col">Customer</th>
                  <th class="white" scope="col">Description</th>
                  <th class="white" scope="col">Details</th>
                  <th class="white" scope="col">Payment Method</th>
                </tr>
              </thead>
              <tbody>
                <?php include 'retrieve_invoice.php'; ?>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr class="bgformlight">
                    <th class="white" scope="row"><?php echo $array[10];?></th>
                    <td class="white"><?php echo $array[1];?></td>
					<td class="white" ><?php echo $array[2];?></td>
					<td class="white" ><?php echo $array[3];?></td>
					<td class="white" ><?php echo $array[4];?></td>
                    <td class="white" ><?php echo $array[9];?></td>
					<td class="white" ><?php echo $array[5];?></td>
                    <td class="white" ><?php echo $array[6];?></td>
					<td class="white" ><?php echo $array[7];?></td>
                    <td class="white" ><?php echo $array[8];?></td>
                    <td class="white" ><?php echo $array[11];?></td>
					<td class="white" ><?php echo $array[12];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td class="white" colspan="8" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
</body>
</html>