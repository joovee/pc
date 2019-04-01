<?php
	include('db.php');
	
	$sql= "SELECT * FROM customer_table";
	$result = mysqli_query($db, $sql);
	

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

    <body>
        <center><h1>Sales Product</h1></center>
		<form method="POST"  action="entigro.php">
		<div class="ml-3" "margin-left:500px">
		<div class="row">
		<div class="col-">
		
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
			<option value="<?php echo $row['customer_id'];?>"><?php echo $row['Firstname'];?></option>
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
		<br>
			<div class="table-responsive">
			<table id="invoice-item-table" class="table table-bordered table-sm">
									<tr>
										<th>Code_no</th>
										<th>Quantity</th>
										<th>Unit</th>
										<th>Amount</th>	
										<th><button type="button" name="add_row" id="add_row" class="btn btn-success btn-sm btn-xs">ADD </button></th>
									</tr>
									<tr>
										<td><input type="text" name="code_no[]" id="barcode1" class="form-control form-control-sm input-sm barcode" placeholder="CollectionCode"/ required></td>
										<td><input type="number" min="1" name="quantity[]" id="quantity1" data-srno="1" class="form-control form-control-sm input-sm quantity" placeholder="Qty" /required></td>
										<td><input type="text" name="unit[]" id="unit1" data-srno="1" class="form-control form-control-sm  input-sm unit" pattern="[A-Za-z0-9]+" placeholder="Unit"required></td>
										<td><input type="number" step="0.01" min="0.00" name="amount[]" id="buy_price1" data-srno="1" class="form-control form-control-sm input-sm amoung" placeholder="amount" /required></td>
									</tr>								
								</table>
							<td align="right">
								<center><input type="submit" name="sales" value="Okay" id="create_delivery" class="btn btn-sm btn-info mr-5"/required></center>
								
				</div>
				</form>
				<script>
				$(document).ready(function(){

	var final_total_amount = $('#final_total_amount').text();
	var count = 1;
	$(document).on('change','#products', function(){
		load(count);
	});
	$(document).on('click','#add_row', function(){
		count += 1;
		$('#quantity').val(count);

		var html_code = ''; 
		html_code += '<tr id="row_id_'+count+'">';
		html_code += '<td><input type="text" name="products[]" id="barcode'+count+'" class="form-control form-control-sm input-sm barcode" placeholder="Barcode"/></td>';
		html_code += '<td><input type="number" name="quantity[]" min="1" id="quantity'+count+'" data-srno="'+count+'" placeholder="Qty"  class="form-control form-control-sm nput-sm quantity" /></td>';
		html_code += '<td><input type="text" name="unit[]" pattern="[A-Za-z]+" title="No number on unit" id="unit'+count+'" placeholder="Kilograms" data-srno="'+count+'" class="form-control form-control-sm input-sm unit"></td>';
		html_code += '<td><input type="number" name="amount[]" min="0.00" step="0.00" placeholder="Amount" id="amount'+count+'" data-srno="'+count+'" class="form-control form-control-sm input-sm buy_price"></td>';
		html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-sm btn-danger btn-xs remove_row">Remove</button></td></tr>';
		$("#invoice-item-table").append(html_code);
		$(document).on('change','#products', function(){
		load(count);
	});
			
	});
	function load($count){
				var products =  $('#products').val();
		$.ajax({
			url : "process.php",
			method: "POST",
			dataType: "json",
			data: {products:products},
			success : function(data){
				for(x in data){
						$('#products'+count).val(data.product_id);
						$('#quantity'+count).val(data.amount);
						$('#unit'+count).val(data.unit);
						$('#amount'+count).val(data.amount);
						
					}
			}
		});
	}
	$(document).on('click','.remove_row',function(){
		var row_id = $(this).attr("id");
				$('#row_id_'+row_id).remove();
		count -= 1;
	});


});</script>
    </body>
</html>