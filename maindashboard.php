<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Timetable Management System | MVGR College of Engineering</title>
	<link rel="stylesheet" type="text/css" href="css/nav_bar.css">
</head>
<body>
	<header>
		<div id="logo">
				<a href="dashboard.php">Timetable Management System</a>
		</div>
		<nav>
			<ul>
				<li><a href="dashboard.php">Home</a></li>

					<li><a href="add_course.php">Add Course</a></li>
					<li><a href="add_faculty.php">Add Faculty</a></li>
					<li><a href="add_subjects.php">Add Subjects</a></li>
					<li><a href="timings.php">Timings</a></li>

				<li><?php echo "<p style='color :#fff;'>Welcome, ".$_SESSION['user_id']; ?></li>
				<?php
					if(!isset($_SESSION['uid']))
					{
						echo "<form action='logout.php'>
								<button>logout</button>
							</form>
						";
					}
				?>
			</ul>
		</nav>
	</header>
</body>
</html>