<div class="container">
<?php include("menubar.php");
include("db.php");
error_reporting(0);?>
   
<?php 

$email = $_SESSION['email'];
$query = "SELECT * FROM `profile` WHERE `email` = '$email'";

$sql = mysqli_query($con,$query);     
if(!$sql)
{  
    $msg ="Sorry ! We are unable to fetched data.";
}
$record=mysqli_fetch_assoc($sql);

?>
<h1>Profile</h1>
<h3>Welcome Prashant's Profile</h3>
<?php 
 if(isset($msg)) { ?>
<div class="alert alert-info fade in">
<strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>
 <span><Strong> Name  :</Strong> <?php echo $record['name'];?></span><br>
 <span><Strong> Email :</Strong> <?php echo $record['email'];?></span><br>
 <span><Strong> UserID :</Strong> <?php echo $record['id']?></span><br>
 <span><Strong> Contact :</Strong> <?php echo $record['contact'];?></span><br>
</div>
