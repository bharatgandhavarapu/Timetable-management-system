<?php 
	include 'maindashboard.php';
	include 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/links.css">
</head>
<body>
	<p class="pCenter">
		Here you will Assign Course, Semester, Section and Subject to a faculty that you added.
	</p><br>
	<h2 class="h2">Add Course</h2><br><br>

	<form method="post" action="inc/add.course.php">
		<label>Course code</label>
		<input type="text" name="course_code" class="adj"><br>
		<p class="pCenter"> &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp e.g B.Tech-IT, B.Tech-Me, MCA, MBA</p>
		<label>Choose a Department</label>
		<select name="dept">
			<option selected="selected">CSE</ption>
			<option value="it">IT</option>
			<option value="ece">ECE</option>
			<option value="eee">EEE</option>
			<option value="mech">MECH</option>
			<option value="chem">CHEM</option>
			<option value="civil">CIVIL</option>
			<option value="mba">MBA/MCA</option>
		</select><br>
		<label>Choose a Year</label>
		<select name="year">
			<option value="1">1</ption>
			<option value="2">2</option>
			<option selected="selected">3</option>
			<option value="4">4</option>
		</select><br>
		<label>Section</label>
		<select name="section">
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="c">C</option>
		</select><br>
		<label>Semester</label>
		<select name="semester">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option selected="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
		</select><br>
		<label>Subject Taught</label>
		<select name="scode">
			<option value="">--all--</option>
			<?php
				$res=mysqli_query($conn,'select sub_name from subject');
				while($row=mysqli_fetch_assoc($res))
				{
					$sub=$row['sub_name'];
					echo "<option>$sub</option>";
				}
			?>
		</select><br>
		<label>Faculty Teaching</label>
		<select name="fid">
			<option value="">--all--</option>
			<?php
				$res=mysqli_query($conn,'select f_name from faculty');
				while($row=mysqli_fetch_assoc($res))
				{
					$f=$row['f_name'];
					echo "<option>$f</option>";
				}
			?>
		</select><br>
		<center>
			<br><input type="submit" value="Add Course">
		</center>
	</form>
</body>
</html>