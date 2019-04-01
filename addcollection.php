<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

if(isset($_POST['new']) && $_POST['new']==1){
	$Product_ID =$_REQUEST['prid'];
	$Code_no =$_REQUEST['cod_num'];
	$Quantity =$_REQUEST['Quan'];
	$Unit =$_REQUEST['unt'];
	$Amount =$_REQUEST['amnt'];
	$ins_query="insert into collection_items(Code_no,Product_ID,Quantity,Unit,Amount) values
	('$Code_no','$Product_ID','$Quantity','$Unit','$Amount')";
	mysqli_query($con,$ins_query);
	$status = "New Items added Succesfully.
	<a href='viewcollection.php'>View Collection</a>";
}
?>

	
=======
<?php include('juvy.php');?>
>>>>>>> new files
=======
<?php include('juvy.php');?>
>>>>>>> new update files
=======
<?php include('juvy.php');?>
>>>>>>> New update
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	<div class="sidebar">
=======
=======
>>>>>>> new files
=======
>>>>>>> new update files
=======
>>>>>>> New update
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
              <a class="nav-link " href="Sales.php" >
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
	<br><br><br>
	<div class="sidebar">
		<br><br><br><br><br>
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
	   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
		<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
		<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
<<<<<<< HEAD
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
	   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
	<div class="form-inline">
	<div>
		<center><h2><font face="Britannic Bold">Add  Collection</font></h2></center>
			<form class="form-inline" name="form" method="post" action=""> 
			<input type="hidden" name="new" value="1" />	
			<p><input type="text" name="cod_num" placeholder="Enter Code_no" required /></p>
			<p><select name="custom_id"  style = "height:42px; "placeholder="Enter Customer_ID" required></p>
			<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM customer_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["custom_id"];  ?>"><?php echo $row["Firstname"]; echo " "; echo $row["Lastname"]; ?></option>
				<?php		}
				
				}
				?>
				</select>
			
			
			<p><input type="date" name="ddate"  style = "height:42px; placeholder="Enter Due_date" required /></p>
		    <label> Status: </label>
					<select input type="text" name="stat" style = "height:42px; class="form-control" placeholder="Status" required  >
						<option placeholder=""></option>
						<option placeholder=""> Paid</option>
						<option placeholder=""> Unpaid</option>
					</select>
			<p><input type="date" name="dpaid"  style = "height:42px; placeholder="Enter Date_paid" required /></p>
			<p><input type="text" name="int" placeholder="Enter Interest" required /></p>
	<center><div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<h2><font face="Britannic Bold"> Items</font></h2>
			<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<label>Code_no:</label><p><input type="text" name="cod_num" placeholder="Enter Code_no" required /></p>
				<p><select name="prid"  style = "width:200px; height:50px; "placeholder="Enter Product_ID" required></p>
				<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM product_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["prid"];  ?>"><?php echo $row["Particular"]; echo " ";?></option>
				<?php		}
				
				}
				?>
				</select>				
				<label>Quantity:</label><p><input type="number" name="Quan" style = "width:200px; height:50px;" placeholder="Enter Quantity" required /></p>
				<label> Unit: </label>
					<select input type="text" name="unt"  style = "width:200px; height:50px;" class="form-control" placeholder="Unit" required  >
						<option placeholder=""></option>
						<option placeholder="">pack</option>
						<option placeholder="">kl</option>
						<option placeholder="">dozen</option>
						<option placeholder="">grams</option>
						<option placeholder="">liters</option>
					</select>
				<label>Amount:</label><p><input type="text" name="amnt" placeholder="Enter Amount" required /></p>
				<p><input name="submit" type="submit" value="Submit" /></p>
			</form>	
>>>>>>> update
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
<<<<<<< HEAD
=======
	</div>
	</div>
	</center>
>>>>>>> update
=======
=======
>>>>>>> new update files
	<br/><br/><br/><br/><div class="form">
	<div>
	<form action="juvy.php" method="POST">
=======
	   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<form method="POST">
>>>>>>> New update
	<b><a style="font-size:20px;">Customer Name:</b></a>
		<?php
			$sql = "SELECT * FROM customer_table";
			$result = mysqli_query($mysqli, $sql);

		?>
		<select name="customer_id" class="form-control">
		<?php
			$resultCheck = mysqli_num_rows($records);
				while ($row = mysqli_fetch_array($result)){
					
		?>
<<<<<<< HEAD
			<option value="<?php echo $row['customer_id'];?>"><?php echo $row['Firstname'];?></option>
=======
			<option value="<?php echo $row['Customer_ID'];?>"><?php echo $row['Firstname'];?></option>
>>>>>>> New update
			<?php
				}
			?>
		</select>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Status:</label></b>
		<select name="status" class="form-control" value="<?php echo $status;?>"placeholder="status" required>
			<option value="" placeholder="status" required></option>
			<option value="paid">Paid</option>
			<option value="unpaid">Unpaid</option>
		</div>
		</select>
		
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Due Date:</label></b>
			<input type="date" name="due_date" class="form-control" value="<?php echo $due_date;?>"placeholder="due_date" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Interest:</label></b>
			<input type="interest" name="interest" class="form-control" value="<?php echo $interest;?>"placeholder="interest" required>
		</div>
		<div class="form-group">
		<font color="black"><label for="exampleInputEmail1"><b>Date Paid:</label></b>
			<input type="date" name="date_paid" class="form-control" value="<?php echo $date_paid;?>"placeholder="date_paid" required>
		</div>
		<div class="form-group">
		<?php 
			if($update==true):
		?>
		<button type="submit" class="btn btn-info" name="update">Update</button>
<<<<<<< HEAD
		<a href="collection.php"class="btn btn-info">View Table</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
			<a href="collection.php"class="btn btn-primary">View Table</a>
=======
		<a href="viewcollection.php"class="btn btn-info">View Sales</a>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="save">Save</button>
			<a href="checkbox.php"class="btn btn-primary"> +Add Items</a>
>>>>>>> New update
		<?php endif;?>
		</div>
	</form>
	</div>
</div>
	
	</div>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> new files
=======
>>>>>>> new update files
=======
>>>>>>> New update
</body>
</html>
