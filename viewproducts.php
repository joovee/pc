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
  <a href="addproducts.php"><i class="fa fa-address-card-o"></i>Add new Products</a>
  <a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection</a>
  <a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items</a>
  <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>
<center><div class="main w-75">
<br/><br/><div class="form">
<h2><font face="Britannic Bold">Product List</font></h2>
</div>

<table class="table-striped" width="100%"  style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Number</strong></th>
<th><strong>Product_ID</strong></th>
<th><strong>Particular</strong></th>
<th><strong>Item_Quantity</strong></th>
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
<td align="center"><?php echo $row["Unit"]; ?></td>
<td align="center"><?php echo $row["Item_Quantity"]; ?></td>
<td align="center"><?php echo $row["Unit"]; ?></td>
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
