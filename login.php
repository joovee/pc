<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<link rel="stylesheet" href="style.css" />
</head>
<body background="photos/1458449.jpg" alt="Responsive background-image" >
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
		echo "Fsdfsdf";
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
    $query = "SELECT * FROM `admin` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
			
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("location: index.php");
		
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
		
?>
<br/><br/><br/><br/><br/><br/>
<div class="form">
<h1><font face="Britannic Bold"><font color="red">Log In</font></font></h1>
<<<<<<< HEAD
<form method="post">
=======
<<<<<<< HEAD
<form action="" method="post" name="login">
=======
<form method="post">
>>>>>>> New update
>>>>>>> 5609e48a566ccdf3f4a61af513cf088d03767b4f
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required /><br/>
<input name="submit" type="submit" value="Submit" />
</form><br/>
</div>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"><font color="red">© 2019 Copyright:</font>
  
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<?php } ?>
</body>
</html>