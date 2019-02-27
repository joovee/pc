<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from product_table where Product_ID='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['Product_ID'];
		$part =$_POST['Particular'];
		$itq =$_POST['Item_Quantity'];
		$unit =$_POST['Unit'];
		$reg_price =$_POST['Regular_Price'];
		$disc =$_POST['Discount'];
		$update="
		UPDATE product_table 
		SET 
			Product_ID='".$id."', 
			Particular='".$part."', 
			Item_Quantity='".$itq."', 
			Unit='".$unit."',
			Regular_Price='".$reg_price."', 
			Discount='".$disc."'
		where
			Product_ID=".$id;
		
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewproducts.php' : window.location.href='viewproducts.php';
				</script>
			";
			
			
		}
		
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Update Record</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
	<div class="sidebar">
		<a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="Viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
		<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Products</a>
		<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>

	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['Product_ID'];?>" />
			<p><input type="text" name="Product_ID" placeholder="Enter Product_ID"
			required value="<?php echo $row['Product_ID'];?>" /></p>
			<p><input type="text" name="Particular" placeholder="Enter Particular"
			required value="<?php echo $row['Particular'];?>" /></p>
			<p><input type="text" name="Item_Quantity" placeholder="Enter Item_Quantity" 
			required value="<?php echo $row['Item_Quantity'];?>" /></p>
			<p><input type="text" name="Unit" placeholder="Enter Unit" 
			required value="<?php echo $row['Unit'];?>" /></p>
			<p><input type="text" name="Regular_Price" placeholder="Enter Regular_Price" 
			required value="<?php echo $row['Regular_Price'];?>" /></p>
			<p><input type="text" name="Discount" placeholder="Enter Discount" 
			required value="<?php echo $row['Discount'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>