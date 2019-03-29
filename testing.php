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
    </br></br><a href='viewcollection.php'>View Collection</a>";
}
?>
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
	<br><br><br>
	<div class="sidebar">
		<br><br><br><br><br>
	   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection </a>
		<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
		<a href="addcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
		<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
	   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
	</div>
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<h2><font face="Britannic Bold">Add Collection</font></h2>
			
			<form name="form" method="post" action="testing.php"> 
				<input type="hidden" name="new" value="1" />
				<label for="colFormLabel" class="col-sm col-form-label">Customer_ID:</label>
			<p><select name="custom_id" style="width:300px; height:50px; "placeholder="Enter Customer_ID" required></p>
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
			
			<label for="colFormLabel" class="col-sm col-form-label">Due_date:</label>
			<p><input type="date" name="ddate"  style="width:300px; height:50px; placeholder="Enter Due_date" required /></p>
		    <label form="colFormLabel" class="col-sm col-form-label" >Status:</label>
					<select input type="text" name="stat" style="width:300px; height:50px; class="form-control" placeholder="Status" required  >
						<option placeholder=""></option>
						<option placeholder=""> Paid</option>
						<option placeholder=""> Unpaid</option>
					</select>
			<label for="colFormLabel" class="col-sm col-form-label">Date_paid:</label>
			<p><input type="date" name="dpaid"  style="width:300px; height:50px; placeholder="Enter Date_paid" required /></p>
			<label for="colFormLabel" class="col-sm col-form-label">Interest:</label>
			<p><input type="text" name="int" style="width:300px; height:50px; placeholder="Enter Interest" required /></p>
			</form>
			<button name="submit" type="button" value="save" />Submit</button>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
</body>
</html>