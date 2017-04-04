<?php
include 'conn.php';
if(isset($_POST['btnsubmit'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$idea=$_POST['idea'];
	$sql="INSERT INTO joinhands(name,phone,email)
	VALUES('$name','$phone','$email')";
	$query=mysqli_query($conn,$sql);
	if($query){
		echo "successfully registered";}
		else{
			echo "unable to register";
		}
}