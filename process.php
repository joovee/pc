<?php
	include('connection.php');

		$name = mysqli_real_escape_string($db,$_POST['products']);
		$show 	= "SELECT * FROM product_table WHERE product_id='$name' ";
		$query 	= mysqli_query($db,$show);

	$row = json_encode(mysqli_fetch_assoc($query));
	echo $row;
?>