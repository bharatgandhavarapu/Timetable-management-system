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
		You first need to Add Subjects, Faculty and then Course.
	</p><br>
	<h2 class="h2">Generate Time Table</h2><br><br>
	<form method="post" action="timetable/1.php">

		<label>Year / Session</label>
		<input type="text" name="course_year" class="adj"><br>
		<p class="pCenter"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp write year e.g 2015-2016 </p>

		<label>Course Name</label>
		<select>
			<option value="">--all--</option>
			<?php
				$res=mysqli_query($conn,'select course_code from course');
				while($row=mysqli_fetch_assoc($res))
				{
					$name=$row['course_code'];
					echo "<option>$name</option>";
				}
			?>
		</select><br>

		<label>Course Code</label>
		<select>
			<option value="">--all--</option>
			<?php
				$res=mysqli_query($conn,'select dept_name,semester,section from course');
				while($row=mysqli_fetch_assoc($res))
				{
					echo "<option>".$row['dept_name']." | ".$row['semester']." | ".$row['section']."</option>";
				}
			?>
		</select><br>
		<p class="pCenter">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp course, semester, section</p>
		<center>
			<br><input type="submit" value="Create Timetable">
		</center>
	</form>
</body>
</html>