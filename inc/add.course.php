<?php 
	include '../database.php';

	if(isset($_POST['course_code']) && isset($_POST['dept']) && isset($_POST['year']) && isset($_POST['section']) && isset($_POST['semester']) && isset($_POST['scode']) && isset($_POST['fid'])){
		$course_code=$_POST['course_code'];
		$dept_name=$_POST['dept'];
		$year=$_POST['year'];
		$section=$_POST['section'];
		$semester=$_POST['semester'];
		$sub_code=$_POST['scode'];
		$f_id=$_POST['fid'];
	}

	$sql="INSERT INTO course(course_code,dept_name,year,section,semester,sub_code,f_id) values('$course_code','$dept_name','$year','$section','$semester','$sub_code','$f_id')";

	if(mysqli_query($conn,$sql))
	{
		echo "data inserted sucessfully<br>Please wait we redirecting you....!";	
		header("refresh:3; url=../add_course.php");
	}
?>