<?php
	$name=$_REQUEST['name'];
	$mobile=$_REQUEST['mobile'];
	$email=$_REQUEST['email'];
	$city=$_REQUEST['addr'];
	$gender=$_REQUEST['gender'];
	$batch=$_REQUEST['batch'];
	$conn = mysqli_connect("localhost","root","","php6pm");
	if(!$conn)
	{
		echo "fail";
	}
	$q="insert into students values(DEFAULT,'$name','$mobile','$email','$city','$gender','$batch')";
	$result=mysqli_query($conn,$q);
	if($result)
	{
		echo "<script>alert('inserted');window.location='viewall.php';</script>";
	}
	else{
		echo mysqli_error($conn);
		echo "not inserted";
	}
	?>