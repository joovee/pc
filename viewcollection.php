<?php
require('db.php');
include("authentication.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Collection</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
		<div class="sidebar">
		   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
			<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
			<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
		<center><div class="main w-75">
		<br/><br/>
		<div class="form">
				<h2><font face="Britannic Bold">Collection List</font></h2>
		</div>

		<table class=" table table-striped table-responsive table-border-collapse" width="100%"  style="border-collapse:collapse; background-color: rgba(0,0,0,0.1)">
			<thead>
				<tr class=" text-success"> 
				<th><strong>Number</strong></th>
				<th><strong>Code_no</strong></th>
				<th><strong>Customer_ID</strong></th>
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
=======
=======
>>>>>>> new update files
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
	<style>
	{
  box-sizing: border-box;
 
}

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> New update
	<style>
	{
  box-sizing: border-box;
 
}

<<<<<<< HEAD
>>>>>>> new files
=======
>>>>>>> new update files
=======
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
body {
   margin:10px;
  padding:0px;
  width:100%;
  height:100%;
}

.column {
  float: left;
  width: 47.00%;
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

.show {display: inline;}
</style>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" width="500" >
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
<<<<<<< HEAD
			
=======
<<<<<<< HEAD
			<li class="nav-item ">
              <a class="nav-link " href="budgetlist.html" >
               About us
              </a>
=======
			
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
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
=======
<<<<<<< HEAD
              <a class="nav-link " href="viewcollection.php" >
               Collection
              </a>
<<<<<<< HEAD
<<<<<<< HEAD
            </li><li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
              </a>
=======
=======
>>>>>>> new update files
            </li>
			<li class="nav-item ">
              <a class="nav-link " href="viewitems.php" >
               Items
              </a>
			  <li class="nav-item ">
              <a class="nav-link " href="changepass.php" >
               Update Password
              </a>
<<<<<<< HEAD
>>>>>>> new files
=======
>>>>>>> new update files
            </li><li class="nav-item ">
=======
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
              <a class="nav-link " href="sales.php" >
               Sales
              </a>
            </li>
			
			 <li class="nav-item ">
<<<<<<< HEAD
=======
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
			<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
=======
			<a href="testing.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
>>>>>>> new files
=======
			<a href="testing.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
>>>>>>> new update files
			<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
			<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
		<br><br><br>
>>>>>>> new files
=======
		<br><br><br>
>>>>>>> new update files
=======
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
			<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
			<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
			<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
		   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
		</div>
		<br><br><br>
		<center><a href="checkbox.php"class="btn btn-primary"> +Add Items</a></center>
<<<<<<< HEAD
=======
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
		<div class="row">
		<div class="column" style="background-color:#808080; margin-left:270px;"> 
			<table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		
				<thead>
				<tr class=" text-success"> 
					<th><strong>No</strong></th>
<<<<<<< HEAD
					
					<th><strong>Customer_Name</strong></th>
=======
					<th><strong>Code_no</strong></th>
					<th><strong>Customer_ID</strong></th>
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
					<th><strong>Due_date</strong></th>
					<th><strong>Status</strong></th>
					<th><strong>Date_paid</strong></th>
					<th><strong>Interest</strong></th>
					<th><strong>Edit</strong></th>
					<th><strong>Delete</strong></th>
				</tr>
				</thead>
				<tbody>
				<?php
		$count=1;
<<<<<<< HEAD
		$sel_query="SELECT * FROM collection_table, customer_table WHERE collection_table.Customer_ID =customer_table.Customer_ID";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
		<tr><td align="center"><?php echo $count; ?></td>
			
			<td align="center"><?php echo $row["Firstname"]; ?></td>
=======
		$sel_query="SELECT * FROM collection_table";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
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
		<tr><td align="center"><?php echo $count; ?></td>
			<td align="center"><?php echo $row["Code_no"]; ?></td>
			<td align="center"><?php echo $row["Customer_ID"]; ?></td>
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
			<td align="center"><?php echo $row["Due_date"]; ?></td>
			<td align="center"><?php echo $row["Status"]; ?></td>
			<td align="center"><?php echo $row["Date_paid"]; ?></td>
			<td align="center"><?php echo $row["Interest"]; ?></td>
			<td align="center">
				<a href="editcollection.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-edit"></i></a>
					</td>
				<td align="center">
				<a href="deletecollection.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-trash-o"></i></a>
						</td>
							</tr>
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<?php $count++; } ?>
=======
=======
>>>>>>> new files
=======
>>>>>>> new update files
=======
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
		<?php $count++; } ?>
				</tbody>
				</thead>
				</table>
		</div>
	
		<div class="column" style="background-color:#808080; margin-left:270px;">
			<table width="99%" border="1" style="border-collapse:collapse; background-color:white;">
		
				<thead>
				<tr class=" text-success"> 
				<th><strong>No.</strong></th>
				<th><strong>Code_no</strong></th>
				<th><strong>Product_ID</strong></th>
				<th><strong>Quantity</strong></th>
<<<<<<< HEAD
				<th><strong>Unit</strong></th>
=======
<<<<<<< HEAD
				<th><strong>Quantity</strong></th>
=======
				<th><strong>Unit</strong></th>
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
				<th><strong>Amount</strong></th>
				<th><strong>Edit</strong></th>
				<th><strong>Delete</strong></th>
				</tr>
				</thead>
				<tbody>
				<?php
		$count=1;
<<<<<<< HEAD
		$sel_query="SELECT * FROM collection_items, product_table WHERE collection_items.Product_ID =product_table.Product_ID";
=======
		$sel_query="SELECT * FROM collection_items";
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
			<tr><td align="center"><?php echo $count; ?></td>
				<td align="center"><?php echo $row["Code_no"]; ?></td>
<<<<<<< HEAD
				<td align="center"><?php echo $row["Particular"]; ?></td>
=======
				<td align="center"><?php echo $row["Product_ID"]; ?></td>
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
				<td align="center"><?php echo $row["Quantity"]; ?></td>
				<td align="center"><?php echo $row["Unit"]; ?></td>
				<td align="center"><?php echo $row["Amount"]; ?></td>
				<td align="center">
			<a href="edititems.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-edit"></i></a>
			</td>
			<td align="center">
			<a href="deleteitems.php?id=<?php echo $row["Code_no"]; ?>"><i class="fa fa-trash-o"></i></a>
				</td>
					</tr>
			<?php $count++; } ?>	
				</tbody>
				</thead>
				</table>
		</div>
<<<<<<< HEAD
=======
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
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
</tbody>
</table>
</body>
</html>
