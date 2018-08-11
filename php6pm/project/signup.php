<?php
	$name=$_REQUEST['name'];
	$mobile=$_REQUEST['mobile'];
	$email=$_REQUEST['email'];
	$city=$_REQUEST['addr'];
	$gender=$_REQUEST['gender'];
	$batch=$_REQUEST['batch'];
	$password=$_REQUEST['password'];
	
	
	$photo_destination="./photos/".$_FILES['photo']['name'];
	$src=$_FILES['photo']['tmp_name'];
	
	
	$conn = mysqli_connect("localhost","root","","php6pm");
	if(!$conn)
	{
		echo "fail";
	}
	$q="insert into students values(DEFAULT,'$name','$mobile','$email','$city','$gender','$batch','$password','$photo_destination')";
	move_uploaded_file($src,$photo_destination);
	$result=mysqli_query($conn,$q);
	if($result)
	{
		echo "<script>alert('inserted, login to continue');window.location='index.php';</script>";
	}
	else{
		echo mysqli_error($conn);
		echo "not inserted";
	}
	?>