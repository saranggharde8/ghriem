
<?php
	$id=$_GET['id'];
	$conn = mysqli_connect("localhost","root","","php6pm");
	$q="select * from students where student_id=$id";
	$result=mysqli_query($conn,$q);
	$row=mysqli_fetch_array($result);
?>

<html>
	<body>
		<form action="update.php" method="GET">
			<table>
				<tr>
					<th colspan=2> Add New Student</th>
				
				</tr>
				<tr>
					<th></th>
					<td><input type="text" name="id" value="<?php echo $row[0]; ?>" hidden></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><input type="text" name="name" value="<?php echo $row['name']; ?>" ></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>
					<?php
						/*if($row['gender']=='male')
						{
							echo '<input type="radio" name="gender" value="male" checked>Male
						<input type="radio" name="gender" value="female" >Female';
						}
						else
						{
							echo '<input type="radio" name="gender" value="male" >Male
						<input type="radio" name="gender" value="female" checked>Female';
						}*/
					?>
						<input type="radio" name="gender" value="male" <?php echo $row['gender']=='male'? "checked":""; ?>>Male
						<input type="radio" name="gender" value="female" <?php echo $row['gender']=='female'? "checked":""; ?> >Female
					</td>
				</tr>
				<tr>
					<th>Mobile Number</th>
					<td><input type="text" name="mobile"  value="<?php echo $row['mobile']; ?>"></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="email" value="<?php echo $row['email']; ?>"></td>
				</tr>
				<tr>
					<th>address</th>
					<td><input type="text" name="addr"  value="<?php echo $row['address']; ?>"></td>
				</tr>
				<tr>
					<th>Batch</th>
					<td><input type="text" name="batch" value="<?php echo $row['batch']; ?>"></td>
				</tr>
				<tr>
					<th></th>
					<td><input type="Submit" name="Save Data" >
						<a href="viewall.php">View all Students</a>
					</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>