<?php
		$email=$_POST['email'];
		$pass=$_POST['password'];
		
$con = mysqli_connect('localhost','root','','serie_tracker');
if(!$con){
	die("CONNECTION fAILED :". mysqli_connect_error());
}
		$sql = "SELECT email, password FROM login_page where email='".$email."' and password='".$pass."';";
		$res= mysqli_query($con,$sql);
if(($res= mysqli_query($con,$sql))){ 
			
		echo "Welcome";
		echo"<br/>";
		header("Location: C:\wamp64\www\Project\series tracker");
		exit();
	}
	else {
		echo "You don't have an account";
		
	}
?>