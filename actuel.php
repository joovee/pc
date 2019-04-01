<?php

$mysqli = new mysqli('localhost','root','','pc') or die(mysqli_error($mysqli));
if(!isset($_SESSION['username'])){
	session_start();
}
$id='';
$update = false;
$code_no="";
$product_id="";
$quantity="";
$unit="";
$amount="";


if(isset($_POST['save'])){
	$code_no = $_POST['code_no'];
	$product_id = $_POST['product_id'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$amount = $_POST['amount'];
	$result=$mysqli->query("select code_no from collection_items where code_no='$code_no'") or die($mysqli->error);
	if(@count($result)==1)
	{
		$row=$result->fetch_array();
		$code_no=$row['id'];
	}
	
	
	$mysqli->query("INSERT INTO collection_items (code_no,product_id,quantity,unit,amount) VALUES (code_no,product_id,'$quantity','$unit','$amount')") or
			die($mysqli->error);
	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "success";
	
	
	header("location:viewcollection.php");
}
if(isset($_GET['delete'])){
	$id =$_GET['delete'];
	$mysqli->query("DELETE FROM collection_items WHERE code_no=$id") or die($mysqli->error());
	
	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";
	
	header("location:viewcollection.php");
	
	
}
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update =true;
	$result = $mysqli->query("SELECT * FROM collection_items WHERE code_no=$id") or die($mysqli->error);
	if(@count($result)==1){
		$row=$result->fetch_array();
		$code_no = $row['code_no'];
		$product_id = $row['product_id'];
		$quantity = $row['quantity'];
		$unit = $row['unit'];
		$amount = $row['amount'];
		
	}
}
if(isset($_POST['update'])){
	$id = $_POST['code_no'];
	$code_no = $_POST['code_no'];
	$product_id = $_POST['product_id'];
	$quantity = $_POST['quantity'];
	$unit = $_POST['unit'];
	$amount = $_POST['amount'];
	
	$mysqli->query("UPDATE collection_items SET code_no='code_no',product_id='product_id',quantity='$quantity',unit='$unit',amount='$amount' WHERE collection_code=$id") or die($mysqli->error);
	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	
	header('location:viewcollection.php');
}


?>