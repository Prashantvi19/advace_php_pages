<!DOCTYPE html>
 <html lang="en">
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Registation Form </title>
	<link rel="icon" type="image/x-icon" href="https://uxwing.com/wp-content/themes/uxwing/download/editing-user-action/register-icon.png">
    <title>Results</title>
 </head>
 <body>

 <?php 
  include('db.php');
  if($_GET['result_update_id'])
  {
    $id = $_GET['result_update_id'];
    $query = "SELECT * FROM `result` WHERE `id` = '$id'";
    $sqld = mysqli_query($con, $query);
    if  ($sqld->num_rows != 0) {
    $data = mysqli_fetch_assoc($sqld);
    }else{
    $msg = "Something went wrong";
	header('location:logindata.php?msg='.$msg);
	die();
    }		
  }

?>

 <div class="container">
 <?php include("menubar.php");?>
 <?php error_reporting(0);
 if($_GET['msg']){ $msg = $_GET['msg'];	?>
<div class="alert alert-info fade in">
<strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
</div>
<?php } ?>
  <h2>Assign Marks</h2>  
         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>English</th>
        <th>Hindi</th>
        <th>Math</th>
        <th>Physics</th>
        <th>Chemistry</th>
        <th>Status: PASS/FAIL</th>
      </tr>
    </thead>
    <!-- `maths`, `english`, `hindi`, `physics`, `chemistry`, `status -->
    <tbody>
    <form action="controller.php" method="POST"> 
      <tr>
        <td><input type="number" required class="form-control" name="english" value = "<?php echo $data['english'];?>"></td>
        <td><input type="number" required  class="form-control" name="hindi" value = "<?php echo $data['hindi'];?>" ></td>
        <td><input type="number" required  class="form-control" name="math" value = "<?php echo $data['maths'];?>" ></td>
        <td><input type="number" required  class="form-control" name="physics" value = "<?php echo $data['physics'];?>" ></td>
        <td><input type="number" required  class="form-control" name="chemistry" value = "<?php echo $data['chemistry'];?>" ></td>
        <td><label><input type="radio"  value="PASS" name="status" <?php echo($data['status'] == 'PASS'? 'checked': '');?> > PASS  </label><label>
     <input type="radio" value="FAIL" name="status" <?php echo( $data['status'] == 'FAIL' ? 'checked' : '');?>> FAIL </label></td>
      </tr>
          
    </tbody> 
    <tfoot>
    <tr ><th colspan="6"><input type="submit" class="btn btn-primary text-center" name ="resultUpdate" value="Update"></th></tr>
    <td><input type="hidden" name = "id" class="form-control" value = "<?php echo $id;?>"></td>
   </tfoot>
  </table>
  </form>
</div>
 </body>
 </html>