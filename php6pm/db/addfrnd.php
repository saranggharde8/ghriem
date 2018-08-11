<?php
	$conn=mysqli_connect("localhost","root","","php6pm");
	if($conn)
	{
		echo "success";
	}
	else
	{
		echo "fail";
	}
	$q="insert into friends values(NULL,'rashmi','jalgaon','1378')";
	$result=mysqli_query($conn,$q);
	if($result)
	{
		echo "inserted";
	}
	else
	{
		echo mysqli_error($conn);
		echo "not inserted";
	}
?>