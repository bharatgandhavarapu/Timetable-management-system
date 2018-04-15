<?php 
	include 'maindashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/links.css">
</head>
<body>
	<br><h2 class="h2">Add Faculty</h2><br><br>
	<form method="post" action="inc/add.faculty.php">
		<label>Faculty Id</label>
		<input type="text" name="fid"><br>
		<label>Faculty Name</label>
		<input type="text" name="fname"><br>
		<label>Designation</label>
		<input type="text" name="des"><br>
		<label>Qualification</label>
		<input type="text" name="qul"><br>
		<center>
			<br><input type="submit" value="Add Faculty">
		</center>
	</form>
</body>
</html>