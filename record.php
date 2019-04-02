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
		<style>
	{
  box-sizing: border-box;
 
}

body {
   margin:10px;
  padding:0px;
  width:100%;
  height:100%;
}

.column {
  float: left;
  width: 50.00%;
  padding: 5px;
  height: 500px;
  margin: 5px;
  
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  background-color: black;
  padding: 10px;
  text-align: center;


}
@media (max-width: 600px) {
  .column {
    width: 100%;
  }
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  border-box: box-sizing;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
		<div class="sidebar">
		   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		   	<a href="additems.php"><i class="fa fa-address-card-o"></i>Add new Items </a>
			<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="viewcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
		<center><h2><font color="green">Reports</font></h2></center>
		<div class="row" >
		</div>
		<br><br><br>
		<div class="column" style="background-color:#808080; margin-left:350px;">
			<table width="99%" border="1" align="left" style="border-collapse:collapse; background-color:white;">
				<thead>
				<tr>
				<th><strong>No.</strong></th>
				<th><strong>Code_no</strong></th>
				<th><strong>Product_ID</strong></th>
				<th><strong>Quantity</strong></th>
				<th><strong>Unit</strong></th>
				<th><strong>Amount</strong></th>
				</tr>
				</thead>
				
				<tbody>
				<?php
				$id = $_GET['id'];
		$count=1;
		$sel_query="SELECT * FROM collection_items,product_table WHERE collection_items.Product_ID=product_table.Product_ID AND Code_no = $id";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { 
	
		
		?>
			<tr><td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["Code_no"]; ?></td>
				<td align="center"><?php echo $row["Particular"]; ?></td>
				<td align="center"><?php echo $row["Quantity"]; ?></td>
				<td align="center"><?php echo $row["Unit"]; ?></td>
				<td align="center"><?php echo $row["Amount"]; ?></td>
				<td align="center">
			
					</tr>
			<?php $count++; } ?>	
				</tbody>
				</thead>
				</table>
				<br><br><br><br><br><br>
				<center><h2><font color="green">Total Amount :
				<?php
				$id = $_GET['id'];
				$sel_query="SELECT SUM(Amount) as total FROM collection_items WHERE Code_no = $id";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { 
				echo $row['total']; 
				
				}?> </h2></center></font>
			</div>
		</div>
				

		<div class="footer">
			
		</div>	
</tbody>
</table>


</body>
</html>
