<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$Product_ID =$_REQUEST['prid'];
    $Particular =$_REQUEST['part'];
    $Item_Quantity = $_REQUEST['ITQ'];
	$Unit = $_REQUEST['unt'];
	$Regular_Price = $_REQUEST['regpri'];
    $Discount = $_REQUEST['discount'];
    $ins_query="insert into product_table(Product_ID,Particular,Item_Quantity,Unit,Regular_Price,Discount) values
    ('$Product_ID','$Particular','$Item_Quantity','$Unit','$Regular_Price','$Discount')";
    mysqli_query($con,$ins_query);
    $status = "New products added Successfully.
    </br></br><a href='viewproducts.php'>View Products</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add New Customer</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="profile.php"><i class="fa fa-sign-out"></i>Profile</a>
  <a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product List</a>
  <a href="viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
  <a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
  <a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<div class="main">
<br/><br/><br/><br/><div class="form">
<div>
<h2><font face="Britannic Bold">Add New Products</font></h2>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="prid" placeholder="Enter Product_ID" required /></p>
<p><input type="text" name="part" placeholder="Enter Particular" required /></p>
<p><input type="number" name="ITQ" placeholder="Enter Item_Quantity" required /></p>
<p><input type="text" name="unt" placeholder="Enter Unit" required /></p>
<p><input type="text" name="regpri" placeholder="Enter Regular_Price" required /></p>
<p><input type="text" name="discount" placeholder="Enter Discount" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</div>
</body>
</html>
