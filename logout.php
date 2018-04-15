<?php 
	$message='You are succesfully logged out...!';
	session_start();
	session_unset();
	session_destroy();
	header("Location: login.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php 
		if(!empty($message))
			echo $message;
	?>
	<form action="logout.php">
		<input type="button" value="Logout">
	</form>
</body>
</html>