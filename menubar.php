
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="https://uxwing.com/wp-content/themes/uxwing/download/editing-user-action/register-icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
 <div class =" nav nav-tabs">
<?php
session_start(); 
?>
  <table class='table table-hover'>
	<tr>
	<th><a href="home.php">Home</a></th>
<?php
if (isset($_SESSION['email']))
{
	echo "
	<th>
    <a href='profile.php'> Profile</a>
	</th>
	<th>
	<a href='logout.php'> Logout</a>
	</th>
	<th>
	<a href='results.php'> Results</a>
	</th>
	<th>
	<a href='more.php'> More</a>
	</th>
	";
}
else{
	echo "<th>
	<a href='login.php'> Login</a><th>
	</th>
	<th>
	<a href='registation.php'> Registater</a>
	</th>
	";
}


?>
<th><a href="logindata.php" > Database</a></th>
<th><a href="#">Service</a></th>
<th><a href="contact.php"> About Us</a></th>
<th><a href="feedback.php">Your feedback</a></th>
</tr>
</table>
 </div>
</div>

</body>
</html>