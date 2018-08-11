<?php
	$id=$_REQUEST['id'];
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
	$q="update students set name='$name',mobile='$mobile',email='$email',address='$city',gender='$gender',batch='$batch' where student_id=$id";
	$result=mysqli_query($conn,$q);
	if(mysqli_affected_rows($conn)>0)
	{
		echo "<script>alert('updated');window.location='viewall.php';</script>";
	}
	else{
		echo mysqli_error($conn);
		echo "not updated";
	}
?>