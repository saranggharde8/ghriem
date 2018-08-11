<html>
	<body>
		<form action="insert.php" method="post">
			<table>
				<tr>
					<th colspan=2> Add New Student</th>
				
				</tr>
				<tr>
					<th>Name</th>
					<td><input type="text" name="name" ></td>
				</tr>
				<tr>
					<th>Gender</th>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td>
				</tr>
				<tr>
					<th>Mobile Number</th>
					<td><input type="text" name="mobile" ></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><input type="text" name="email" ></td>
				</tr>
				<tr>
					<th>address</th>
					<td><input type="text" name="addr"  ></td>
				</tr>
				<tr>
					<th>Batch</th>
					<td><input type="text" name="batch" ></td>
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