<?php
require('db.php');
include("authentication.php");
$id=$_REQUEST['id'];
$query = "SELECT * from collection_table where Customer_ID='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
<br/><br/><br/><br/>
<div class="sidebar">
  <a href="profile.php"><i class="fa fa-fw fa-home"></i> Profile</a>
  <a href="addcollection.php"><i class="fa fa-address-card-o"></i>Add new Collection</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>
<center><h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['submit']) && $_POST['new']==1)
{

$Customer_ID =$_REQUEST['id'];
$Code_no =$_POST['codnum'];
$Due_date =$_POST['ddate'];
$Status =$_POST['stat'];
$Date_paid =$_POST['dpaid'];
$Interest =$_POST['int'];
$update="update collection_table set
id='".$Customer_ID."', codnum='".$Code_no."',  ddate='".$Due_date."', stat='".$Status."', dpaid='".$Date_paid."', 
int='".$Interest."' where Customer_ID='".$id."'";
mysqli_query($con, $update); 
$status = "Contact Updated Successfully. </br></br>
<a href='viewcollection.php'>View Updated Contact</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['Customer_ID'];?>" />
<p><input type="text" name="id" placeholder="Enter Customer_ID" 
required value="<?php echo $row['Customer_ID'];?>" /></p>
<p><input type="text" name="codnum" placeholder="Enter Code_no" 
required value="<?php echo $row['Code_no'];?>" /></p>
<p><input type="text" name="ddate" placeholder="Enter Due_date" 
required value="<?php echo $row['Due_date'];?>" /></p>
<p><input type="text" name="stat" placeholder="Enter Date_paid" 
required value="<?php echo $row['Status'];?>" /></p>
<p><input type="text" name="dpaid" placeholder="Enter Date_paid" 
required value="<?php echo $row['Date_paid'];?>" /></p>
<p><input type="text" name="int" placeholder="Enter Interest" 
required value="<?php echo $row['Interest'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</center>
<?php } ?>
</div>
</div>
</body>
</html>