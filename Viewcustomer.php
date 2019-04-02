<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Customer</title>
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
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
            </li>
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
   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
	<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Add new Customers</a>
	<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
	<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Customers List</font></h2>
</div>

<table class=" table table-striped table-responsive table-border-collapse" width="100%"  style="border-collapse:collapse; background-color: rgba(0,0,0,0.1)">
<thead>
<tr class=" text-success"> 
<th ><strong >Customer_Id</strong></th>
<th><strong>Firstname</strong></th>
<th><strong>Lastname</strong></th>
<th><strong>Middlename</strong></th>
<th><strong>Extendedname</strong></th>
<th><strong>Phonenumber</strong></th>
<th><strong>Street</strong></th>
<th><strong>City</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
</div>
</center>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM customer_table;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["Customer_ID"]; ?></td>
<td align="center"><?php echo $row["Firstname"]; ?></td>
<td align="center"><?php echo $row["Lastname"]; ?></td>
<td align="center"><?php echo $row["Middlename"]; ?></td>
<td align="center"><?php echo $row["Extendedname"]; ?></td>
<td align="center"><?php echo $row["Phonenumber"]; ?></td>
<td align="center"><?php echo $row["Street"]; ?></td>
<td align="center"><?php echo $row["City"]; ?></td>

<td align="center">
<a href="editcustomer.php?id=<?php echo $row["Customer_ID"]; ?>"><i class="fa fa-edit"></i></a>
</td>
<td align="center">
<a href="deletecustomer.php?id=<?php echo $row["Customer_ID"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
