<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Contact Us </title>
</head>
<body>
<?php include("menubar.php"); ?>
  <div class="container">
   <h1>Contact Us</h1>
<?php error_reporting(0);
 if($_GET['msg']){ $msg = $_GET['msg'];	?>
<div class="alert alert-info fade in">
<strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>
    <form action="controller.php" method="POST">
    Name:<input type="text" name="name" required="required" placeholder=" Please enter your name here"><br>
 Nontact No:<input type="number" name="contact" required="required" placeholder="Please enter your contact number here"><br>
 E-mail ID:<input type="email" name="email" required="required"placeholder="Please enter your email ID here"><br>
 Massage:
 <textarea name="massage" class="form-control" rows="3" required="required" placeholder="Please enter your massage here........"></textarea><br>
 
 <input type="submit" class="btn btn-primary" name="contactSubmit" value="Submit">
  
</form>
   </div>
   
</body>
</html>