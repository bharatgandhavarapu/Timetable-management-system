<?php

	session_start();
	include 'database.php';

	$message='';

	if(isset($_POST['teacher_id']) && isset($_POST['password']))
	{
		$uid=$_POST['teacher_id'];
		$pwd=$_POST['password'];
	}
	
	if(!empty($uid)&&!empty($pwd))
	{
		$sql="SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();

		if(count($row)>0)
		{
			$message='you are logged in!';
			$_SESSION['user_id'] = $row['uid'];
			header("Location: dashboard.php");
		}
		else
		{
			$message='Sorry, those credentials do not match';
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Timetable Management System | MVGR College of Engineering </title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="header">
		User Aunthentication System
	</div>

	<?php 
		if(!empty($message))
			echo $message;
	?>
	
	<h1>Login</h1>
	<span>or <a href="index.php">Register here</a></span>
	<form action="login.php" method="POST">
		<input type="text" name="teacher_id" placeholder="TeacherId" autocomplete="off" required="">
		<input type="password" name="password" placeholder="Password" required="">
		<input type="submit" value="login">
	</form>
</body>
</html>