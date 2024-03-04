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
    
    <tbody>
    <form action="controller.php" method="POST"> 
      <tr>
      <td><input type="number" required class="form-control" name="english"></td>
        <td><input type="number" required  class="form-control" name="hindi"></td>
        <td><input type="number" required  class="form-control" name="math"></td>
        <td><input type="number" required  class="form-control" name="physics"></td>
        <td><input type="number" required  class="form-control" name="chemistry"></td>
        <td><label><input type="radio" checked value="PASS" name="status"> PASS  </label><label>
     <input type="radio" value="FAIL" name="status"> FAIL </label></td>
      </tr>
          
    </tbody> 
    <tfoot>
    <tr ><th colspan="6"><input type="submit" class="btn btn-primary text-center" name ="resultsubmit" value="Save"></th></tr>
    </tfoot>
  </table>
  </form>
</div>
 </body>
 </html>