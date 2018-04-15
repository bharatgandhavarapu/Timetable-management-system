<!DOCTYPE html>
<html>
<head>
	<title>Timetable Management System | MVGR College of Engineering</title>
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

	<h1>Register</h1>
	<form action="libs/register.php" method="POST">
		<input type="text" name="teacher_id" placeholder="Enter your TeacherId" required="">
		<input type="email" name="email" placeholder="Enter your Email id" required="">
		<input type="password" name="password" placeholder="and Password" required="">
		<input type="submit" value="register">
	</form>
	<span>Already Register then <a href="login.php">Login here</a></span>
</body>
</html>