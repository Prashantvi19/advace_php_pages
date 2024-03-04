
<?php 
include('db.php');
error_reporting(0);
// SELECT `id`, `email`, `name`, `password`, `contact` FROM `profile` WHERE 1
if(isset($_GET['user_update_id'])){
$id = $_GET['user_update_id'];
$querydShow= "SELECT * FROM `profile` WHERE `id` = '$id'";
$sqlShow = mysqli_query($con, $querydShow ); 
$record=mysqli_fetch_assoc($sqlShow);

	$email = $record['email'];
	$name = $record['name'] ;
	$contact = $record['contact'];

}
?>

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


<h1> Update Profile </h1>
Enter Your Name : <input type="text" Name='name' value="<?php echo $name;?>"><br>
Enter Your Contact No. : <input type="number" Name='contact' value="<?php echo $contact;?>"><br>
Enter Your Email: <input readonly type="email" Name='email' value="<?php echo $email;?>"><br>
<input type="submit" Name='profileUpdate' value="Update"><br>

 <input type="hidden" Name='upID' value="<?php echo $id;?>"><br>
</form>
</div>
</body>
</html>
