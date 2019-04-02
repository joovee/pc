<?php include('juvy.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New Collection</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-responsive">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <a class="navbar-brand" href="home.html">
			<img src="photos/PCLogo2017-20Feb16.png" style="float:left;" width="150" height="50" alt=""></a>
 	    </a>
           
            <li class="nav-item ">
              <a class="nav-link " href="home.php" >
               Home 
              </a>
            </li>
			
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="Viewcustomer.php" >
              Customer
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewproducts.php" >
               Product
              </a>
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
			<li class="nav-item ">
              <a class="nav-link " href="Sales.php" >
               Sales
              </a>
           
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav><br/><br/>
	<br><br><br>
	<div class="sidebar">
		<br><br><br><br><br>
	   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add Collection </a>
		<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
		<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
	   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<form method="POST">
	<b><a style="font-size:20px;">Customer Name:</b></a>
		<?php
			$sql = "SELECT * FROM customer_table";
			$result = mysqli_query($mysqli, $sql);

		?>
		<select name="customer_id" class="form-control">
		<?php
			$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)){
					
		?>
			<option value="<?php echo $row['Customer_ID'];?>"><?php echo $row['Firstname'];?></option>
			<?php
				}
			?>
		</select>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Status:</label></b>
		<select name="status" class="form-control" value="<?php echo $status;?>"placeholder="status" required>
			<option value="" placeholder="status" required></option>
			<option value="paid">Paid</option>
			<option value="unpaid">Unpaid</option>
		</div>
		</select>
		
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Due Date:</label></b>
			<input type="date" name="due_date" class="form-control" value="<?php echo $due_date;?>"placeholder="due_date" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Interest:</label></b>
			<input type="interest" name="interest" class="form-control" value="<?php echo $interest;?>"placeholder="interest" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Date Paid:</label></b>
			<input type="date" name="date_paid" class="form-control" value="<?php echo $date_paid;?>"placeholder="date_paid" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="viewcollection.php"class="btn btn-info">View Sales</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
			<a href="checkbox.php"class="btn btn-primary"> +Add Items</a>
		<?php endif;?>
		</div>
	</form>
	</div>
</div>
	
	</div>
</body>
</html>
