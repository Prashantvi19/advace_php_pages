<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Data</title>
</head>
<body>
<div class="container">
<?php
include('db.php');
error_reporting(0);
$query = "SELECT * FROM `profile` order by id ASC";
$sqld = mysqli_query($con, $query);
?>
<div class="container">
<form action="controller.php" method="POST">
<?php error_reporting(0);
	if($_GET['msg']){ $msg = $_GET['msg'];	?>
<div class="alert alert-info fade in">
<strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>
<div class="container bg-success ">
<?php include("menubar.php");?>
  <h2  class=" bg-primary">Database all Rregistered User's</h2>
  <table class="table">
    <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile No</th>
    <th>Password</th>
    <th>Delete</th>

  </tr>
    </thead>
    <tbody>
    <?php
if (mysqli_num_rows($sqld) > 0) {
  
  while($data = mysqli_fetch_assoc($sqld)) {
 ?>
 <tr>
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['contact']; ?> </td>
   <td><?php echo $data['password']; ?> </td>
   <td><a href="controller.php?user_delete_id=<?php echo $data['id']?>">Delete</a></td>
   
 <tr>
 <?php
 }
  } else { 
    ?>
    <tr>
     <td colspan="6">No data found</td>
    </tr>
    
    <?php } ?>
    <tr class ="text-center">
      <th colspan="6" class ="text-center bg-success"><a href="logindata.php" class = "btn btn-info text-center" >Page Refresh</a></th>
  </tr>
  </tbody>
  </table>
</div>
</div>
</body>
</html>

