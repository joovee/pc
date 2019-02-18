<?php
require('db.php');
include("authentication.php");
$id=$_REQUEST['id'];
$query = "SELECT * from product_table where Product_ID='".$id."'"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result); 
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Update Products</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
	<div class="sidebar">
		<a href="profile.php"><i class="fa fa-fw fa-home"></i> Profile</a>
		<a href="insert.php"><i class="fa fa-address-card-o"></i>Add new Contact</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>
<?php
	$status = "";
	if(isset($_POST['submit']) && $_POST['new']==1)
	{
	$id=$_REQUEST['id'];
	$Product_ID =$_POST['prid'];
	$Particular =$_POST['part'];
	$Item_Quantity =$_POST['ITQ'];
	$Unit =$_POST['unt'];
	$Regular_Price =$_POST['regpri'];
	$Discount =$_POST['discount'];
	$update="update product_table set
	prid='".$Product_ID."', part='".$Particular."', ITQ='".$Item_Quantity."', unt='".$Unit.",
	regpri='".$Regular_Price."', discount='".$Discount."', where Product_ID='".$id."'";
	mysqli_query($con, $update);
	$status = "Customer Updated Successfully. </br></br>
	<a href='viewproducts.php'>View Updated Customer</a>";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
	}else {
?>
	<div>
		<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
			<p><input type="text" name="prid" placeholder="Enter Product_ID"
			required value="<?php echo $row['Product_ID'];?>" /></p>
			<p><input type="text" name="part" placeholder="Enter Particular" 
			required value="<?php echo $row['Particular'];?>" /></p>
			<p><input type="text" name="ITQ" placeholder="Enter Item_Quantity" 
			required value="<?php echo $row['Item_Quantity'];?>" /></p>
			<p><input type="text" name="unt" placeholder="Enter Unit" 
			required value="<?php echo $row['Unit'];?>" /></p>
			<p><input type="text" name="regpri" placeholder="Enter Regular_Price" 
			required value="<?php echo $row['Regular_Price'];?>" /></p>
			<p><input type="text" name="discount" placeholder="Enter Discount" 
			required value="<?php echo $row['Discount'];?>" /></p>
			<p><input name="submit" type="submit" value="Update" /></p>
		</form>
		</center>
<?php } ?>
</div>
</div>
</body>
</html>