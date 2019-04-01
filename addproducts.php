<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$id =$_REQUEST['Product_ID'];
    $part =$_REQUEST['Particular'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    $itq = $_REQUEST['Item_Quantity'];
	$unt = $_REQUEST['Unit'];
	$regprice = $_REQUEST['Regular_Price'];
    $discount = $_REQUEST['Discount'];
    $ins_query="insert into product_table(Product_ID,Particular,Item_Quantity,Unit,Regular_Price,Discount) values
    ('$id','$part','$itq','$unt','$regprice','$discount')";
=======
=======
>>>>>>> new update files
=======
>>>>>>> New update
	$unt = $_REQUEST['Unit'];
	$regprice = $_REQUEST['Regular_Price'];
    $discount = $_REQUEST['Discount'];
    $ins_query="insert into product_table(Product_ID,Particular,Unit,Regular_Price,Discount) values
<<<<<<< HEAD
    ('$id','$part','$itq','$regprice','$discount')";
<<<<<<< HEAD
>>>>>>> new files
=======
>>>>>>> new update files
    mysqli_query($con,$ins_query);
    $status = "New customer added Successfully.
=======
    ('$id','$part','$unt','$regprice','$discount')";
    mysqli_query($con,$ins_query);
    $status = "New product added Successfully.
>>>>>>> New update
    </br></br><a href='viewproducts.php'>View Product</a>";
}
?>
<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<meta charset="utf-8">
	<title>Products</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> new files
=======
>>>>>>> new update files
	<nav class="navbar fixed-top navbar-expand-lg navbar-black bg-white fixed-top">
=======
<meta charset="utf-8">
<title>View Products</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
>>>>>>> New update
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
<<<<<<< HEAD
			<li class="nav-item ">
              <a class="nav-link " href="budgetlist.html" >
               About us
              </a>
=======
			
>>>>>>> New update
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
<<<<<<< HEAD
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
              </a>
=======
              <a class="nav-link " href="sales.php" >
               Sales
              </a>
            
>>>>>>> New update
            </li><li class="nav-item ">
              <a class="nav-link " href="logout.php" >
               Logout
              </a>
            
            </li>
          </ul>
        </div>
		</button>
    </nav><br/><br/>
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
	<div class="sidebar">
	  <a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
	  <a href="addproducts.php"><i class="fa fa-address-card-o"></i>Add new Products</a>
	  <a href="Viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
<<<<<<< HEAD
	  <a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
	  <a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
=======
	  <a href="sales.php"><i class="fa fa-address-card-o"></i>Collection</a>
>>>>>>> New update
	  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<h2><font face="Britannic Bold">Add New Products</font></h2>
	<form name="form" method="post" action=""> 
	<input type="hidden" name="new" value="1" />
<<<<<<< HEAD
	<p><input type="text" name="Product_ID" placeholder="Enter Product_ID" required /></p>
	<p><input type="text" name="Particular" placeholder="Enter Particular" required /></p>
<<<<<<< HEAD
<<<<<<< HEAD
	<p><input type="text" name="Item_Quantity" placeholder="Enter Item_Quantity" required /></p>
<<<<<<< HEAD
	<p><input type="text" name="Unit" placeholder="Enter Unit" required /></p>
	<p><input type="number" name="Regular_Price" placeholder="Enter Regular_Price" required /></p>
	<p><input type="text" name="Discount" placeholder="Enter Discount" required /></p>
	<p><input name="submit" type="submit" value="Submit" /></p>
=======
	<label> Unit: </label>
					<select input type="text" name="Unit" class="form-control" placeholder="Unit" required  >
=======
	<label> Unit: </label>
					<select input type="text" name="Unit" style="width:197px;" class="form-control" placeholder="Unit" required  >
>>>>>>> new files
=======
	<label> Unit: </label>
					<select input type="text" name="Unit" style="width:197px;" class="form-control" placeholder="Unit" required  >
>>>>>>> new update files
=======
	<label>Product_ID:</label>
	<p><input type="text" name="Product_ID" placeholder="Enter Product_ID" required /></p>
	<label>Particular:</label>
	<p><input type="text" name="Particular" placeholder="Enter Particular" required /></p>
	<label> Unit: </label>
					<select input type="text" name="Unit" style="width:197px;" class="form-control" placeholder="Unit" required  >
>>>>>>> New update
						<option placeholder=""></option>
						<option placeholder="">pack</option>
						<option placeholder="">kl</option>
						<option placeholder="">dozen</option>
						<option placeholder="">grams</option>
						<option placeholder="">liters</option>
						
					</select>
<<<<<<< HEAD
	<p><input type="text" name="Regular_Price" placeholder="Enter Regular_Price" required /></p>
	<p><input type="text" name="Discount" placeholder="Enter Discount" required /></p>
	<p><input name="submit" type="submit" value="Save" /></p>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> update
=======
>>>>>>> new files
=======
>>>>>>> new update files
=======
	<label>Regular_Price:</label>
	<p><input type="text" name="Regular_Price" placeholder="Enter Regular_Price" required /></p>
	<label>Discount:</label>
	<p><input type="text" name="Discount" placeholder="Enter Discount" required /></p>
	<p><input name="submit" type="submit" value="Save" /></p>
>>>>>>> New update
	</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</div>
</body>
</html>