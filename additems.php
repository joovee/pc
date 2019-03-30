<?php
require('db.php');
include("authentication.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $Product_ID =$_REQUEST['prid'];
	$Code_no =$_REQUEST['cod_num'];
    $Quantity = $_REQUEST['Quan'];
	$Unit = $_REQUEST['unt'];
	$Amount = $_REQUEST['amnt'];
    $ins_query="insert into collection_items(Code_no,Product_ID,Quantity,Unit,Amount) values
    ('$Code_no','$Product_ID','$Quantity','$Unit','$Amount')";
    mysqli_query($con,$ins_query);
    $status = "New ITEMS added Successfully.
    </br></br><a href='viewitems.php'>View Items</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New ITEMS</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
			<div class="sidebar">
			   <a class="mt-5" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
				<a href="viewitems.php"><i class="fa fa-address-card-o"></i>Items </a>
				<a href="viewproducts.php"><i class="fa fa-address-card-o"></i>Product </a>
				<a href="viewcustomer.php"><i class="fa fa-address-card-o"></i>Customers </a>
				<a href="viewcollection.php"><i class="fa fa-address-card-o"></i>Collection </a>
			   <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
<<<<<<< HEAD
<<<<<<< HEAD
	<div class="main">
	<br/><br/><br/><br/><div class="form">
	<div>
	<h2><font face="Britannic Bold">Add New Items</font></h2>
			<form name="form" method="post" action=""> 
				<input type="hidden" name="new" value="1" />
				<p><input type="text" name="cod_num" placeholder="Enter Code_no" required /></p>
				<p><input type="text" name="prid" placeholder="Enter Product_ID" required /></p>
				<p><input type="number" name="Quan" placeholder="Enter Quantity" required /></p>
				<p><input type="text" name="unt" placeholder="Enter Unit" required /></p>
				<p><input type="text" name="amnt" placeholder="Enter Amount" required /></p>
				<p><input name="submit" type="submit" value="Submit" /></p>
			</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
	</div>
	</div>
=======
=======
>>>>>>> new update files
	<div class="main margin-right:50px;">
	
	<br/><br/><br/><br/><div class="form">
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
			
	<div style="width:500px;">
		<table width="100%" border="1" style="border-collapse:collapse bg-color:light;" class="table table-striped table-light">
		<thead>
		<tr class="bg-danger">
			<th><strong>Code_no</strong></th>
			<th><strong>Product_ID </strong></th>
			<th><strong>Quantity </strong></th>
			<th><strong>Unit</strong></th>
			<th><strong>Amount</strong></th>
			<th><strong>Checkbox</strong></th>
			
		</tr>
		</thead>
			<tbody>
		</div>
				</center>
			<?php
			$count=1;
			$sel_query="Select * from collection_items";
			$result = mysqli_query($con,$sel_query);
			$count = mysqli_num_rows($result); // Count table rows
			while ($row = $result->fetch_object())
            {
                echo "<tr>";
                echo "<td>" . $row->Code_no . "</td>";
                echo "<td>".$row->Product_ID."</td>"; 
                echo "<td>" . $row->Quantity . "</td>";
				 echo "<td>" . $row->Amount . "</td>";
                echo "<td coslpan ='5'>" . $row->Unit." </td>";
                echo '<td> <input type="text" id="Quantity" style="width:70px; height:30px" value="" /></td>';
				echo '<td> <input type="text" id="Amount" style="width:70px; height:30px" value="" /></td>';
                echo "<td><input type ='checkbox' name='representatives' data-id=' " . $row->prid . "'  data-quantity='". $row->Quantity ."' data-unit='". $row->unt .  "'' /></td>";
                echo "</tr>";
            } ?>
			
		</tbody>
		</table>
		<br/>
		<input type="submit" value="submit"name=" id="add"/>
		</div>	
	</form>	
	
	<script>
	$(document).ready(function(){
			$("#add").on('click',function(){
			var customer = $("#customer").val();
			var Quantity = [];
			var id = [];
			var Amount = [];
			alert("sddfsd");
				$("input:checked[name=representatives]").each(function(){
					id.push($(this).attr('data-id'));
					amount.push($(this).attr('data-Amount'));
					$("#Quantity").each(function(){
						Quantity.push($(this).val());
					});
				});

				$.ajax({
					url: "additems.php",
					type: "post",
					data:{id:id,customer:customer,Quantity:Quantity,Amount:Amount},
					success: function(data){
						alert(data);
						console.log(data);
					},
					error: function(request, status, error){
						alert(request.responseText);
					}
				});
			});
		});
		</script>
<<<<<<< HEAD
>>>>>>> new files
=======
>>>>>>> new update files
</body>
</html>