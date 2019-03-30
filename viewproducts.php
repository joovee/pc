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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="sidebar">
  <a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="addproducts.php"><i class="fa fa-address-card-o"></i>Add new Products</a>
  <a href="Viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
  <a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
  <a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
=======
=======
>>>>>>> new files
=======
>>>>>>> new update files
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
			<li class="nav-item ">
              <a class="nav-link " href="budgetlist.html" >
               About us
              </a>
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
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
            </li><li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
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
	<br><br><br>
	  <a class="mt-5"href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
	  <a href="addproducts.php"><i class="fa fa-address-card-o"></i>Add new Products</a>
	  <a href="Viewcustomer.php"><i class="fa fa-address-card-o"></i>Customer</a>
	  <a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
	  <a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
	  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> update
=======
>>>>>>> new files
=======
>>>>>>> new update files
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Product List</font></h2>
</div>

<table class=" table table-striped table-responsive table-border-collapse" width="100%"  style="border-collapse:collapse; background-color: rgba(0,0,0,0.1)">
<thead>
<tr class=" text-success"> 
<th><strong>Number</strong></th>
<th><strong>Product_ID</strong></th>
<th><strong>Particular</strong></th>
<th><strong>Unit</strong></th>
<th><strong>Regular_Price</strong></th>
<th><strong>Discount</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
</div>
</center>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM product_table";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Product_ID"]; ?></td>
<td align="center"><?php echo $row["Particular"]; ?></td>
<<<<<<< HEAD
<<<<<<< HEAD
<td align="center"><?php echo $row["Item_Quantity"]; ?></td>
=======
>>>>>>> new files
=======
>>>>>>> new update files
<td align="center"><?php echo $row["Unit"]; ?></td>
<td align="center"><?php echo $row["Regular_Price"]; ?></td>
<td align="center"><?php echo $row["Discount"]; ?></td>
<td align="center">
<a href="editproducts.php?id=<?php echo $row["Product_ID"]; ?>"><i class="fa fa-edit"></i></a>
</td>
<td align="center">
<a href="deleteproducts.php?id=<?php echo $row["Product_ID"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
