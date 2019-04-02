<?php
	require('db.php');
	include("authentication.php");
	$status = "";
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add New ITEMS</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css"	href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
		

</head>
	<body background="photos/pexels-photo-304664.jpeg" alt="Responsive background-image" >
			
<body background="images/pexels-photo-1615011.jpeg" alt="Responsive background-image" >
		
		<center><h2><font face="Britannic Bold">Add Items</font></h2>
		<div style="width:900px;">
				
		<form action="checkbox.php" method="post">
		<input type="hidden" name="new" value="1" />
		
		<br/><br/>
		<b><a style="font-size:20px;">Customer Name:</b></a>
		<select name="customers" id="customer">
		<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM customer_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["customer_id"];  ?>"><?php echo $row["Firstname"]; echo " "; echo $row["Lastname"]; ?></option>
				<?php		}
				
				}
				?>
				</select>
				<div class="form-group">
				
		<b><a style="font-size:20px;">Collection code:</b></a>
		<select name="code_no" id="code_no">
		<?php
				include_once 'db.php';
				
				$sql = "SELECT * FROM collection_table;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<option value="<?php echo $row["Code_no"];  ?>"><?php echo $row["Code_no"];  ?></option>
				<?php		}
				
				}
				?>
			</select>
				
		
		<div style="width:900px;">
<<<<<<< HEAD
		<table width="100%" border="1" style="border-collapse:collapse;" ">
=======
		<table width="100%" border="1" style="border-collapse:collapse;" class="table table-striped table-dark">
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
		<thead>
		<tr class="bg-yellow">
			
			<th><strong>Product_ID</strong></th>
			<th><strong>Unit</strong></th>
			<th><strong>Quantity</strong></th>
			<th><strong>Amount</strong></th>
<<<<<<< HEAD
			<th><strong>Tick</strong></th>
=======
			<th><strong>Click</strong></th>
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
			
		</tr>
		</thead>
			<tbody>
		</div>
				</center>
			<?php
			$count=1;
			$sel_query="Select * from product_table";
			$result = mysqli_query($con,$sel_query);
			$count = mysqli_num_rows($result); // Count table rows
			while ($row = $result->fetch_object())
            {
                // set up a row for each record
                echo "<tr>";
                echo "<td>" . $row->Product_ID . "</td>";
                echo "<td>" . $row->Unit . "</td>";
                echo '<td> <input type="text" id="Quantity" style="width:70px; height:20px"/> </td>';
				echo '<td>'.$row->Regular_Price.'</td>';
                echo "<td><input type='checkbox' name='representatives' id='checkbox' data-price='".$row->Regular_Price."' data-id='".$row->Product_ID ."'   data-unit='".$row->Unit."'' /></td>";
                echo "</tr>";
				mysqli_query($con,$sel_query);
				$status = "New items added Successfully.
				</br></br><a href='viewcollection.php'>View Sales</a>";
            } 
			?>
			
			
			
		</tbody>
		</table>
		<br/>
		<p><input name="submit" type="submit" id="submit" value="Submit" /></p>
		<a href="sales.php"class="btn btn-primary">View Sales</a>
		</div>	
	</form>	
</center>
<script>

$(document).ready(function() {
	
		$("#submit").on('click', function(){
			
			var code = $("#code_no").val();
			
			var id = [];
			var price = [];
			var qty = [];
			var unit = [];
			var chck = $('input[name=representatives]');
			
			/*var empty = $(this).parent().find("input[type='text']").filter(function() {
					console.info(this.value === "");
				}); */
				
			if(chck.is(':checked')){
				$('input[name=representatives]:checked').each(function(){	
					id.push($(this).attr('data-id'));
					price.push($(this).attr('data-price'));
					unit.push($(this).attr('data-unit'));
					$("input[type='text']").each(function(){
					if($(this).val().length > 0){
						qty.push($(this).val());
					}
				});
				});	
			};
				 $.ajax({
					url: "insert_sales.php",
					type: "post",
					data:{code:code,id:id,unit:unit,qty:qty,price:price},
					success: function(data){
						alert(data);
					}
				 });
			});
});


</script>
	
</body>
</html>