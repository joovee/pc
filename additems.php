<?php include('actuel.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New ITEMS</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		

</head>
	<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
			<div class="sidebar">
			   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
				<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
				<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
				<a href="viewcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
				<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
			   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
	<section class="main">

    <div class="row justify-content-center">
	<div class="col-sm-4">
	<div class="row justify-content-center">
	<form action="actuel.php" method="POST">
	<input type="hidden" name="code_no" value="<?php echo $id; ?>">
	<div class="form-group">
	
		<b><a style="font-size:20px;">Code No.</b></a>
		<?php
			$sql = "SELECT * FROM collection_table";
			$result = mysqli_query($mysqli, $sql);

		?>
		<select name="Code_no" class="form-control">
		<?php
			$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)){
					
		?>
			<option value="<?php echo $row['Code_no'];?>"><?php echo $row['Code_no'];?></option>
			<?php
				}
			?>
		</select>
		
		<div class="form-group">
	
		<b><a style="font-size:20px;">Product ID</b></a>
		<?php
			$sql = "SELECT * FROM product_table";
			$result = mysqli_query($mysqli, $sql);

		?>
		<select name="product_id" class="form-control">
		<?php
			$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)){
					
		?>
			<option value="<?php echo $row['Product_ID'];?>"><?php echo $row['Product_ID'];?></option>
			<?php
				}
			?>
		</select>

		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Quantity:</label></b>
			<input type="quantity" style="width:150px;" name="quantity" class="form-control" value="<?php echo $quantity;?>"placeholder="quantity" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Unit:</label></b>
		<select name="unit" class="form-control">
			<option value="dozen">dozen</option>
			<option value="liters">grams</option>
			<option value="pcs">pcs.</option>
		</div>
		</select>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Amount:</label></b>
			<input type="amount" name="amount" class="form-control" value="<?php echo $amount;?>"placeholder="amount" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
		<a href="viewcollection.php"class="btn btn-info">View Table</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
			<a href="viewcollection.php"class="btn btn-primary">View Table</a>
		<?php endif;?>
		</div>
	</form>
	</div>

<br>

</body>
</html>