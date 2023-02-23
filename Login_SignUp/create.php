<?php
$name=$_POST["name"];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['password'];

		
		$con = mysqli_connect('localhost','root','','serie_tracker');
if(!$con){
	die("CONNECTION fAILED :". mysqli_connect_error());
}
$sql = "Insert into login_page(name,lastname,email,password) values('".$name."','".$lastname."','".$email."','".$pass."');";

if(mysqli_query($con,$sql)){
	echo "Account Created successfully";
} else {
		echo "error :".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);
?>