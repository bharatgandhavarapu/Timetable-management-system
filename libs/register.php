<?php
	session_start();
	include '../database.php';
	$message='';

	if(isset($_POST['teacher_id']) && isset($_POST['password']) && isset($_POST['email']))
	{
		$uid=$_POST['teacher_id'];
		$pwd=$_POST['password'];
		$email=$_POST['email'];
		$date = date("d-m-y");
		$time = date("h-i-s a");
	}
	
	if(!empty($email) && !empty($uid) && !empty($pwd))
	{
		$sql="INSERT INTO user(email,uid,pwd,date,time) VALUES ('$email','$uid','$pwd','$date','$time')";
		$result=$conn->query($sql);

		if(!count($result)>0){
			 $message= "you account has not been created yet!";
		}
		else
		{
			echo "You are succesfully register ";
			$_SESSION['user_id']=$_POST['teacher_id'];
			header("Location: ../maindashboard.php");
		}
	}
	else
	{
		echo "Username is already been Taken<br>Try with Different Name";
	}
		
?>