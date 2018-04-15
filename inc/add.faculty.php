<?php 
	include '../database.php';

	if(isset($_POST['fid']) && isset($_POST['fname']) && isset($_POST['des']) && isset($_POST['qul'])){
		$fid=$_POST['fid'];
		$fname=$_POST['fname'];
		$des=$_POST['des'];
		$qul=$_POST['qul'];
	}
		
	$sql="INSERT INTO faculty(f_id,f_name,designation,qualification) values('$fid','$fname','$des','$qul')";
	$result=$conn->query($sql);

	if($result>0){
		echo "data inserted sucessfully<br>Please wait we redirecting you....!";
		header("refresh:3; url=../add_faculty.php");
	}

?>