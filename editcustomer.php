<?php
require('db.php');
include("authentication.php");
$id=$_REQUEST['id'];
$query = "SELECT * from customer_table where id='".$id."'"; 
$result = mysqli_query($con, $query)or die ( mysqli_error());
$row = mysqli_fetch_assoc($result); 
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
		<a href="profile.php"><i class="fa fa-fw fa-home"></i> Profile</a>
		<a href="insert.php"><i class="fa fa-address-card-o"></i>Add new Contact</a>
		<a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
	</div>
		<center><h1>Update Record</h1>
<?php
	$status = "";
	if(isset($_POST['submit']) && $_POST['new']==1)
	{
	$id = $_POST['id'];
	$firstname =$_POST['Firstname'];
	$lastname =$_POST['Lastname'];
	$middlename =$_POST['Middlename'];
	$extendedname =$_POST['Extendedname'];
	$phonenumber =$_POST['Phonenumber'];
	$street =$_POST['Street'];
	$city =$_POST['City'];
	$update="UPDATE customer_table SET 
	Firstname='".$firstname."', Lastname='".$lastname."', Middlename='".$middlename."', Extendedname='".$extendedname.", Phonenumber='".$phonenumber."', Street='".$street."',
	City'".$city."' where Customer_ID='".$id."'";
	mysqli_query($con, $update);
	$status = "Customer Updated Successfully. </br></br>
	<a href='Viewcustomer.php'>View Updated Customer</a>";
	echo '<p style="color:#FF0000;">'.$status.'</p>';
	}else {
?>
	<div>
		<form name="form" method="post" action=""> 
			<input name="id" type="hidden" value="<?php echo $row['Customer_ID'];?>" />
			<p><input type="text" name="Firstname" placeholder="Enter FirstName"
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
		</center>
<?php } ?>
</div>
</div>
</body>
</html>