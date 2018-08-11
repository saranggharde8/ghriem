<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	echo "<script>alert('please log in to continue');window.location='index.php';</script>";
	
}
else
{
$id=$_SESSION['user_id'];
$conn=mysqli_connect("localhost","root","","php6pm");
$q="select * from students where student_id=$id;";
$res=mysqli_query($conn,$q);
$data=mysqli_fetch_array($res);
?>
<h1>welcome <?php echo $data['name']; ?></h1>
<img src="<?php echo $data['photo']; ?>" height=100 width=100>
<a href="logout.php">logoout</a>
<?php
}
?>