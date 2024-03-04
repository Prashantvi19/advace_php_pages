<!DOCTYPE html>
<html lang="en">
<head>
  <title>WebData</title>
</head>
<body>
<div class="container">

<?php
error_reporting(0);
include('db.php');
$query = "SELECT * FROM `profile` order by id ASC";
$sqld = mysqli_query($con, $query);
?>


<div class="container">
  <?php include("menubar.php");?>
  <?php 
	if($_GET['msg']){ $msg = $_GET['msg'];?>
<div class="alert alert-info fade in">
  <strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>


<form action="controller.php" method="POST">
<div class="container bg-success ">
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
    <th>Edit Profile</th>

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
   <td><a onclick="if(confirm('Are you sure for deleting data from database??, if you delete that data you can not retrive this data.<br> If you want to delete this click on   OK  otherbise click on  Cancel .')){ return true}else{return  false}" href="controller.php?user_delete_id=<?php echo $data['id']?>">Delete</a></td>
   <td><a href="updateprofile.php?user_update_id=<?php echo $data['id']?>">Edit Profile</a></td>
 <tr>
 <?php
 }
  } else { 
    ?>
    <tr>
     <td colspan="6">No data found</td>
    </tr>
    
    <?php } ?>
  </tbody>
  </table>
</div>
<!-- for ResultsPage in ResultsPage -->
<?php 
$Rquery = "SELECT * FROM `result` order by id ASC";
$Rsqld = mysqli_query($con, $Rquery);
?>

<div class="container bg-success ">
  <h2  class=" bg-primary">Results User's</h2>
  <table class="table">
    <thead>
    <tr>
    <th>ID</th>
    <th>User ID</th>
    <th>Hindi</th>
    <th>English</th>
    <th>Maths</th>
    <th>Physics</th>
    <th>Chemestry</th>
    <th>Status</th>
    <th>Delete</th>
    <th>Edit Result</th>
  
  </tr>
    </thead>
    <tbody>
    <?php
if ($Rsqld->num_rows> 0) {
  
  while($data = mysqli_fetch_assoc($Rsqld)) {
 ?>
 <tr>
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['user_id']; ?> </td>
   <td><?php echo $data['hindi']; ?> </td>
   <td><?php echo $data['english']; ?> </td>
   <td><?php echo $data['maths']; ?> </td>
   <td><?php echo $data['physics']; ?> </td>
   <td><?php echo $data['chemistry']; ?> </td>
   <td><?php echo $data['status']; ?> </td>
   <td><a onclick="if(confirm('Are you sure for deleting data from database??, if you delete that data you can not retrive this data.<br> If you want to delete this click on   OK  otherbise click on  Cancel . ')){ return true}else {return  false}" href="controller.php?result_delete_id=<?php echo $data['id']?>">Delete</a></td>
   <td><a href="updateResult.php?result_update_id=<?php echo $data['id']?>">Edit Result</a></td>
 <tr>
 <?php
 }
  } else { 
    ?>
    <tr>
     <td colspan="6">No data found</td>
    </tr>
    <?php } ?>
  </tbody>
  <tfoot> <tr>
      <th colspan="10" class =" text-right bg-success"><a href="logindata.php" class = "btn btn-info text-center" >Page Refresh</a></th>
  </tr></tfoot>
  </table>
</div>
