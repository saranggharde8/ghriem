<?php
	$email=$_POST['email'];
	$password=$_POST['password'];
	$conn=mysqli_connect("localhost","root","","php6pm");
	$q="select * from students where email='$email' and password='$password';";
	$res=mysqli_query($conn,$q);
	//var_dump($res);
	if(mysqli_num_rows($res)==1)
	{
		session_start();
		$data=mysqli_fetch_array($res);
		$_SESSION['user_id']=$data[0];
		header("location:profile.php?id=".$data[0]);
	}
	else
	{
		header("location:index.php?msg=invalid");
		//echo "username or password is wrong please relogin <a href='index.php'>Login here</a>";
	}
?>