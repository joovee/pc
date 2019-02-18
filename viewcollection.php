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
<div class="sidebar">
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection</a>
  <a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers</a>
  <a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Products</a>
  <a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Collection List</font></h2>
</div>

<table class="table-striped" width="100%"  style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Number</strong></th>
<th><strong>Customer_ID</strong></th>
<th><strong>Code_no</strong></th>
<th><strong>Due_date</strong></th>
<th><strong>Status</strong></th>
<th><strong>Date_paid</strong></th>
<th><strong>Interest</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
</div>
</center>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM collection_table";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Customer_ID"]; ?></td>
<td align="center"><?php echo $row["Code_no"]; ?></td>
<td align="center"><?php echo $row["Due_date"]; ?></td>
<td align="center"><?php echo $row["Status"]; ?></td>
<td align="center"><?php echo $row["Date_paid"]; ?></td>
<td align="center"><?php echo $row["Interest"]; ?></td>
<td align="center">
<a href="editcollection.php?id=<?php echo $row["Customer_ID"]; ?>"><i class="fa fa-edit"></i></a>
</td>
<td align="center">
<a href="deletecollection.php?id=<?php echo $row["Customer_ID"]; ?>"><i class="fa fa-trash-o"></i></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</body>
</html>
