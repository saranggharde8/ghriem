<?php
	$id=$_GET['id'];
	$conn = mysqli_connect("localhost","root","","php6pm");
	$q="delete from students where student_id=$id";
	$result=mysqli_query($conn,$q);
	if(mysqli_affected_rows($conn) >0)
	{
		echo "<script>alert('deleted');window.location='viewall.php';</script>";
	}

		?>	