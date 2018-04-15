<?php 
	include 'maindashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/links.css">
</head>
<body>
	<p class="pCenter">
		 &nbsp &nbsp Here you need to fill the below details according to the weekly only.
	</p><br>
	<br><h2 class="h2">Add Subject</h2><br><br>

	<form method="post" action="inc/add.subject.php">
		<label>Subject code</label>
		<input type="text" name="sub_code" required=""><br>
		<label>Subject Name</label>
		<input type="text" name="sub_name" required=""><br>
		<label>Total Lecture</label>
		<input type="text" name="TL" placeholder="TL" required=""><br>
		<p class="pCenter">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total lecture for this subject</p><br>
		<label>Total Tutorial</label>
		<input type="text" name="TT" placeholder="TT" required=""><br>
		<p class="pCenter">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total tutorial for this subject</p><br>
		<label>Total Practical</label>
		<input type="text" name="TP" placeholder="TP" required=""><br>
		<p class="pCenter">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total Practical for this subject</p><br>
		<center>
			<br><input type="submit" value="Add Subject">
		</center>
	</form>
</body>
</html>