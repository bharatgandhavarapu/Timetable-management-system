<?php 
	include 'maindashboard.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/links.css">
</head>
<body>
	<br><h2 class="h2">Lecture Timing</h2><br><br>
	<form method="post" action="">
		<label>First Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 9.00-9.50"><br>
		<label>Second Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 9.50-10.40"><br>
		<label>Third Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 10.40-11.30"><br>
		<label>Fourth Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 11.30-12.20"><br>
		<label>Fifth Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 12.20-1.10"><br>
		<label>Sixth Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 1.10-2.00"><br>
		<label>Seventh Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 2.00-2.50"><br>
		<label>Eight Hour</label>
		<input type="text" name="fid" placeholder=" e.g : 2.50-3.40"><br>
		<center>
			<br><input type="submit" value="Add Timing">
		</center>
	</form>
</body>
</html>