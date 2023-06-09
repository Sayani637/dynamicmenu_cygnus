<?php
session_start();

$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['password'];

$con=new mysqli("localhost","root","","dynamicmenu");
if($con->connect_error) die($con->connect_error);
else{
	$sql="insert into menu(uname,email,password)values('$uname','$email','$password')";
	$con->query($sql);
	$rows=$con->affected_rows;

	if($rows==1){
	 $_SESSION['msg']="<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>You have Successfully register with us</div>";
	}
	 else{ 
	 $_SESSION['msg']="<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button>SignUp Error</div>";
	}
}
$con->close();
header("location:index.php");
?>