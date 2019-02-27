<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$Code_no =$_REQUEST['cod_num'];
    $Customer_ID =$_REQUEST['custom_id'];
    $Due_date = $_REQUEST['ddate'];
	$Status = $_REQUEST['stat'];
	$Date_paid = $_REQUEST['dpaid'];
    $Interest = $_REQUEST['int'];
    $ins_query="insert into collection_table(Code_no,Customer_ID,Due_date,Status,Date_paid,Interest) values
    ('$Code_no','$Customer_ID','$Due_date','$Status','$Date_paid','$Interest')";
    mysqli_query($con,$ins_query);
    $status = "New collection added Successfully.
    </br></br><a href='viewcollection.php'>View Products</a>";
}
?>
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
	<div class="sidebar">
	   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
		<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
		<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
	   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
		<h2><font face="Britannic Bold">Add New Collection</font></h2>
			<form name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />
			<p><input type="text" name="cod_num" placeholder="Enter Code_no" required /></p>
			<p><input type="text" name="custom_id" placeholder="Enter Customer_ID" required /></p>
			<p><input type="date" name="ddate" placeholder="Enter Due_date" required /></p>
			<p><input type="text" name="stat" placeholder="Enter Status" required /></p>
			<p><input type="date" name="dpaid" placeholder="Enter Date_paid" required /></p>
			<p><input type="text" name="int" placeholder="Enter Interest" required /></p>
			<p><input name="submit" type="submit" value="Submit" /></p>
			</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
</body>
</html>
