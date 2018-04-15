<?php 
	include '../database.php';

	if(isset($_POST['sub_code']) && isset($_POST['sub_name']) && isset($_POST['TL']) && isset($_POST['TT']) && isset($_POST['TP'])){
		$sub_code=$_POST['sub_code'];
		$sub_name=$_POST['sub_name'];
		$TL=$_POST['TL'];
		$TT=$_POST['TT'];
		$TP=$_POST['TP'];
	}
		
	$sql="INSERT INTO subject(sub_code,sub_name,TL,TT,TP) values('$sub_code','$sub_name','$TL','$TT','$TP')";
	$result=$conn->query($sql);

	if($result>0){
		echo "data inserted sucessfully<br>Please wait we redirecting you....!";
		header("refresh:3; url=../add_subjects.php");
	}
?>