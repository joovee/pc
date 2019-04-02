<?php include("db.php");

$customer_id = $_POST['customer_id'];
$product = $_POST['products'];
$status = $_POST['status'];
$qty = $_POST['quantity'];
$unit = $_POST['unit'];
$amount = $_POST['amount'];
$sql = "";
$sales = array();

$insert = "INSERT INTO collection_table(customer_id,products) VALUES($customer_id,'$products')";
$res = mysqli_query($db, $insert);

$select = "SELECT code_no FROM collection_table ORDER BY code_no DESC LIMIT 1";
$res1 = mysqli_query($db, $select);
$row = mysqli_fetch_array($res1);

for ($num = 0; $num < count($_POST['products']); $num++){
	$sales[]=$row['code_no'];
}    
$i = 0;
while($i < count($_POST['products'])){
	$product1 = mysqli_real_escape_string($db,$product[$i]);
	$code_no = mysqli_real_escape_string($db,$code_no[$i]);
	$quantity = mysqli_real_escape_string($db,$quantity[$i]);
	$unit = mysqli_real_escape_string($db,$unit[$i]);
	$amount= mysqli_real_escape_string($db,$amount[$i]);
	$sales1 = mysqli_real_escape_string($db,$sales[$i]);
	
	$sql = "INSERT INTO collection_table(code_no,quantity,unit,amount) VALUES($code_no,$quantity,$unit,'$amount')";
	mysqli_query($db,$sql);
	$i++;
}
if($sql == true){
	echo '<script> alert("Success!"); window.location.href="viewcollection.php";</script>';
}
	