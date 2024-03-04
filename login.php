<head> <title> Login </title>  </head>
<div class="container">
<?php include("menubar.php"); ?>
<form action="controller.php" method="POST">
<?php error_reporting(0);
 if($_GET['msg']){ $msg = $_GET['msg'];	?>
<div class="alert alert-info fade in">
<strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>

	Email :<input type="email" name="email" placeholder='ram12@gmail.com'><br>	
	Password :<input type="password" name="password" placeholder='Enter your Password'><br>
	<input type="submit" name = 'loginbtn' value="Login">

</form> 
</div>