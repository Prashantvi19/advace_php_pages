<?php 
include('db.php');
error_reporting(0);
session_start();


// login user code starting from
if(isset($_POST['loginbtn']))
{
	$email = $_POST['email'];
	$ppassword = $_POST['password'];

	// don't remove this email of sued in below for read and write operations ather as a id active record

	if((!empty($email || $password))){


	$passwordQuery = "SELECT * FROM `profile` WHERE `email` = '$email' AND  `password` = '$ppassword'";
	$idQuery= "SELECT * FROM `profile` WHERE `email` = '$email'";

	 $passCheck = mysqli_query($con, $passwordQuery);
	 $userCheck = mysqli_query($con, $idQuery);
	

	if($passCheck->num_rows > 0)
	{
		$_SESSION['email'] = $email;

		header('location:profile.php');
		die();

	}elseif($userCheck -> num_rows > 0)
	{  
		$msg ="Incorrect password !";

	}elseif($userCheck -> num_rows == 0){
		$msg = "You are not exist. Please Register yourself";

	}else{
		$msg ="Please enter your email address and password";
	}
    }
	header('location:login.php?msg='.$msg);
}
// login user code endpoint


// Registation code starting from
if(isset($_POST['registerbtn']))
{  
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$ppassword = $_POST['password'];
    
	if(!empty($name || $email || $contact || $ppassword))
	{
		$query = "INSERT INTO `profile` (`email`, `name`, `password`, `contact`) VALUES ('$email', '$name','$ppassword', '$contact')";
	$insert= mysqli_query($con, $query);

	if($insert){
		$msg =  "Inserted Successfully";
		
	}else{
		$msg = "This E-mail address already exists";
		
	}
	
	}
	else{
		$msg = "Something skipped";
	}
	header('location:registation.php?msg='.$msg);
	die();
}
// End of registration code

//Update User Profile code start from 
if(isset($_POST['profileUpdate']))
{    $id = $_POST['upID'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];    

	if(!empty($name || $email || $contact))
	{
		$queryupdate = " UPDATE `profile` SET `email`='$email',`name`='$name',`contact`='$contact' WHERE `id`='$id' ";
       $sqldUpdate = mysqli_query($con, $queryupdate);
	if($sqldUpdate){
	
		$msg =  "Updated Successfully";
		
	}else{
		$msg = "Something went wrong";	
	}
	
	}
	header('location:logindata.php?msg='.$msg);
	die();
}
//Endpoint code of Update profile data 

// Delete Code of User from Database
if(isset($_GET['user_delete_id']))
{
	$delete_id = $_GET['user_delete_id'];
	$query = "DELETE FROM `profile` WHERE  `id` = '$delete_id'";
    $sqld = mysqli_query($con, $query);
	if($sqld){
		$msg="Data Deleted";
	}else{
		$msg="something went wrong";
	}
	header('location:logindata.php?msg='.$msg);
}
// Ending poin of Delete User


// Starting code of Submit results from
if(isset($_POST['resultsubmit'])){
	$english = $_POST['english'];
	$hindi = $_POST['hindi'];
	$math = $_POST['math'];
	$physics = $_POST['physics'];
	$chemistry = $_POST['chemistry'];
	$status= $_POST['status'];
	
	if(!empty($english || $hindi || $math || $physics || $chemistry || $status))
	{   
		$rquery="INSERT INTO `result`(`maths`, `english`, `hindi`, `physics`, `chemistry`, `status`) VALUES ('$math','$english','$hindi','$physics','$chemistry','$status')";
	     $insertResult= mysqli_query($con,$rquery);

	$msg = ($insertResult) ? "Inserted Successfully":"Something went wrong";
	
	}
	else{
		$msg="something skipped";
	}
	header('location:results.php?msg='.$msg);
	die();
}
// Ending point of code Submit results 

// starting of code updating results 
if(isset($_POST['resultUpdate'])){

	$id = $_POST['id'];
	$english = $_POST['english'];
	$hindi = $_POST['hindi'];
	$math = $_POST['math'];
	$physics = $_POST['physics'];
	$chemistry = $_POST['chemistry'];
	$status= $_POST['status'];
	
	if(!empty($english || $hindi || $math || $physics || $chemistry || $status))
	{   
		$rquery="UPDATE `result` SET `maths`='$math',`english`='$english',`hindi`='$hindi',`physics`='$physics',`chemistry`='$chemistry',`status`='$status' WHERE `id`= $id ";
	     $insertResult= mysqli_query($con,$rquery);

	  $msg = ($insertResult) ? "Inserted Successfully":"Something went wrong";
	
	
	}
	else{
		$msg="something skipped";
	}
	header('location:logindata.php?msg='.$msg);
	die();
}
// ending pint of code updateresults 

// delete results code  start from
if(isset($_GET['result_delete_id']))
{
	$delete_id = $_GET['result_delete_id'];
	$query = "DELETE FROM `result` WHERE `id` = '$delete_id'"; 
	$sqld = mysqli_query($con, $query);
	if($sqld){
		$msg="Data Deleted";
	}else{
		$msg="something went wrong";
	}
	header('location:logindata.php?msg='.$msg);
}
//End point of delete results code

// code of feedBack Submin from
if(isset($_POST['feedbackssSubmit']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	$activID = $_SESSION['email'];

	if(isset($activID)){
		$feedQuery ="INSERT INTO `userfeedback`( `name`, `email`,`fromActivID`,`contact`, `feedback`) VALUES ('$name','$email','$activID','$contact','$feedback')";
	$feedbackwirte = mysqli_query($con, $feedQuery);
	
  if( $feedbackwirte){
	$msg="Thanks for feedback";
  }else{
	$msg="Something went wrong";
  }
}else{
	$msg="For submiting, please log in $activID";
}
  header('location:feedback.php?msg='.$msg);
}

// End code of feedBack Submin from

// Start Subming code of contact form
if(isset($_POST['contactSubmit']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$massage=$_POST['massage'];
	$activID = $_SESSION['email'];
	
	if(isset($activID)){

	$contQuery ="INSERT INTO `contact`( `name`, `contact`, `email`,`fromActivID`, `massage`) VALUES ('$name','$contact','$email','$activID','$massage')";
	$massagekwirte = mysqli_query($con, $contQuery);
  $msg = ($massagekwirte) ? "Form Submitted Successfully" : "Something went wrong";
}else{
	$msg="For submiting, please log in $activID";
}
  header('location:contact.php?msg='.$msg);
}
// End point of subming contact Code 

?>