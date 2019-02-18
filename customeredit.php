<?php
require('db.php');
include("authentication.php");
$id=$_REQUEST['id'];
$query = "SELECT * from customer_table where Customer_ID='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Record</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<br/><br/><br/><br/>
	<div class="form">
	<p><a href="dashboard.php">Dashboard</a> 
	| <a href="productsInsert.php">Add Product</a> 
	| <a href="logout.php">Logout</a></p>
	<h1>Update Record</h1>
	<?php
	$status = "";
	if(isset($_POST['submit']) && $_POST['new']==1)
	{
	$id=$_REQUEST['id'];
	$first =$_POST['Firstname'];
	$lastname =$_POST['Lastname'];
	$middlename =$_POST['Middlename'];
	$extendedname =$_POST['Extendedname'];
	$phonenumber =$_POST['Phonenumber'];
	$street =$_POST['Street'];
	$city =$_POST['City'];
	$update="update customer_table set
	Firstname='".$first."', Lastname='".$lastname."', 
	Middlename='".$middlename."', Extendedname='".$extendedname."', 
	Phonenumber='".$phonenumber."',Street='".$street."',
	City='".$city."'";
	mysqli_query($con, $update); 
	$status = "Record Updated Successfully. </br></br>
	<a href='Viewcustomer.php'>View Updated Record</a>";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
	}else {
	?>
	<div>
		<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
			<p><input type="text" name="Firstname" placeholder="Enter Firstname" 
			required value="<?php echo $row['Firstname'];?>" /></p>
			<p><input type="text" name="Lastname" placeholder="Enter Lastname" 
			required value="<?php echo $row['Lastname'];?>" /></p>
			<p><input type="text" name="Middlename" placeholder="Enter Middlename" 
			required value="<?php echo $row['Middlename'];?>" /></p>
			<p><input type="text" name="Extendedname" placeholder="Enter Extendedname" 
			required value="<?php echo $row['Extendedname'];?>" /></p>
			<p><input type="text" name="Phonenumber" placeholder="Enter Phonenumber" 
			required value="<?php echo $row['Phonenumber'];?>" /></p>
			<p><input type="text" name="Street" placeholder="Enter Street" 
			required value="<?php echo $row['Street'];?>" /></p>
			<p><input type="text" name="City" placeholder="Enter City" 
			required value="<?php echo $row['City'];?>" /></p>
			<p><input name="submit" type="submit" value="Update" /></p>
		</form>
	<?php } ?>
	</div>
	</div>
</body>
</html>