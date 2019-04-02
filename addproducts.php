<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
	$id =$_REQUEST['Product_ID'];
    $part =$_REQUEST['Particular'];
	$unt = $_REQUEST['Unit'];
	$regprice = $_REQUEST['Regular_Price'];
    $discount = $_REQUEST['Discount'];
    $ins_query="insert into product_table(Product_ID,Particular,Unit,Regular_Price,Discount) values
    ('$id','$part','$unt','$regprice','$discount')";
    mysqli_query($con,$ins_query);
    $status = "New product added Successfully.
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
<meta charset="utf-8">
<title>View Products</title>
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
              <a class="nav-link " href="sales.php" >
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
	<div class="sidebar">
	  <a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
	  <a href="addproducts.php"><i class="fa fa-address-card-o"></i>Add new Products</a>
	  <a href="Viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
	  <a href="sales.php"><i class="fa fa-address-card-o"></i>Collection</a>
	  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<h2><font face="Britannic Bold">Add New Products</font></h2>
	<form name="form" method="post" action=""> 
	<input type="hidden" name="new" value="1" />
	<label>Product_ID:</label>
	<p><input type="text" name="Product_ID" placeholder="Enter Product_ID" required /></p>
	<label>Particular:</label>
	<p><input type="text" name="Particular" placeholder="Enter Particular" required /></p>
	<label> Unit: </label>
					<select input type="text" name="Unit" style="width:197px;" class="form-control" placeholder="Unit" required  >
						<option placeholder=""></option>
						<option placeholder="">pack</option>
						<option placeholder="">kl</option>
						<option placeholder="">dozen</option>
						<option placeholder="">grams</option>
						<option placeholder="">liters</option>
						
					</select>
	<label>Regular_Price:</label>
	<p><input type="text" name="Regular_Price" placeholder="Enter Regular_Price" required /></p>
	<label>Discount:</label>
	<p><input type="text" name="Discount" placeholder="Enter Discount" required /></p>
	<p><input name="submit" type="submit" value="Save" /></p>
	</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</div>
</body>
</html>