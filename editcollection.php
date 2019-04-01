<?php
	require('db.php');
	include("authentication.php");
	$id = $_GET['id'];
	$query = "SELECT * from collection_table where Code_no='".$id."'"; 
	$result = mysqli_query($con, $query)or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result); 
	
	
	// Use to update record
	if(isset($_POST['update_record'])){
		$id =$_POST['Code_no'];
		$custom_id =$_POST['Customer_ID'];
		$ddate =$_POST['Due_date'];
		$stat =$_POST['Status'];
		$dpaid =$_POST['Date_paid'];
		$intrst =$_POST['Interest'];
		$update="
		UPDATE collection_table 
		SET 
			Code_no='".$id."', 
			Customer_ID='".$custom_id."', 
			Due_date='".$ddate."', 
			Status='".$stat."',
			Date_paid='".$dpaid."', 
			Interest='".$intrst."'
		where
			Code_no=".$id; 
		
		if(mysqli_query($con, $update)){
			echo "
				<script>
				var msg = confirm('Record Updated');
				(msg == true)  ? window.location.href='viewcollection.php' : window.location.href='viewcollection.php';
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
			<input name="id" type="hidden" value="<?php echo $row['Code_no'];?>" />
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
			<p><input type="text" name="Code_no" placeholder="Enter Code_no"
			required value="<?php echo $row['Code_no'];?>" /></p>
			<p><input type="text" name="Customer_ID" placeholder="Enter Customer_ID"
			required value="<?php echo $row['Customer_ID'];?>" /></p>
			<p><input type="date" name="Due_date" placeholder="Enter Due_date" 
			required value="<?php echo $row['Due_date'];?>" /></p>
			<p><input type="text" name="Status" placeholder="Enter Status" 
			required value="<?php echo $row['Status'];?>" /></p>
			<p><input type="date" name="Date_paid" placeholder="Enter Date_paid" 
			required value="<?php echo $row['Date_paid'];?>" /></p>
			<p><input type="text" name="Interest" placeholder="Enter Interest" 
=======
=======
>>>>>>> new files
=======
>>>>>>> new update files
=======
>>>>>>> New update
			<label>Code_no</label><p><input type="text" name="Code_no" placeholder="Enter Code_no"
			required value="<?php echo $row['Code_no'];?>" /></p>
			<label>Customer_ID</label><p><input type="text" name="Customer_ID" placeholder="Enter Customer_ID"
			required value="<?php echo $row['Customer_ID'];?>" /></p>
			<label>Due_date</label><p><input type="date" name="Due_date" placeholder="Enter Due_date" 
			required value="<?php echo $row['Due_date'];?>" /></p>
			 <label> Status: </label>
					<select input type="text" name="stat" class="form-control" placeholder="Status" required value="<?php echo $row['Status'];?>">
						<option placeholder=""></option>
						<option placeholder=""> Paid</option>
						<option placeholder=""> Unpaid</option>
					</select><br><br>
			<label>Date_paid</label><p><input type="date" name="Date_paid" placeholder="Enter Date_paid" 
			required value="<?php echo $row['Date_paid'];?>" /></p>
			<label>Interest</label><p><input type="text" name="Interest" placeholder="Enter Interest" 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> update
=======
>>>>>>> new files
=======
>>>>>>> new update files
=======
>>>>>>> New update
			required value="<?php echo $row['Interest'];?>" /></p>
			<p><input name="update_record" type="submit" value="Update" /></p>
		</form>
		</center>
		
</div>
</div>
</body>
</html>