<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Registion</title>
</head>
<body>
<?php  include('menubar.php'); ?>
<div class="container">
<form action="controller.php" method="POST">
<?php error_reporting(0);
	if($_GET['msg']){ $msg = $_GET['msg'];	?>
<div class="alert alert-info fade in">
<strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>

<h1> Registation Form </h1>
Enter Your Name : <input type="text" Name='name'><br>
Enter Your Contact No. : <input type="number" Name='contact'><br>
Enter Your Email: <input type="email" Name='email'><br>
Enter Your Passward : <input type="password" Name='password'><br>
<input type="submit" Name='registerbtn' value="Register"><br>
</form>
</div>
</body>
</html>