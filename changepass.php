<?php
require('db.php');
include("authentication.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Change Password</title>
</head>
<body>
<?php 
		
		
		if(isset($_POST['re_password']))
		{
		$old_password=$_POST['old_password'];
		$new_password=$_POST['new_password'];
		$con_password=$_POST['con_password'];
		$chg_pwd=mysqli_query("select * from admin where id='1'");
		$chg_pwd1=mysqli_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_password){
		if($new_password==$con_password){
		$update_pwd=mysqli_query("update admin set password='$new_password' where id='1'");
		$change_pwd_error="Update Sucessfully !!!"; 
		}
		else{
		$change_pwd_error="Your new and Retype Password is not match !!!";
		}
		}
		else
		{
		$change_pwd_error="Your old password is wrong !!!";
		}}
	?>
</body>
</head>