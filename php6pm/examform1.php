<html>
	<body>
		<form action="examform.php" method="POST">
		name:<input type="text" name="name"><br>
		gender:<input type="radio" name="gender" value="male" > male
			   <input type="radio" name="gender" value="female" checked>female <br>
		education:<select name="education">
				<option>BCA</option>
				<option>BSC</option>
				<option>BA</option>
				<option>MCA</option>
				<option>BSC</option>
				<option>MA</option>
				</select><br>
		subject:<br>
				<input type="checkbox" name="subject[]" value="html" checked>HTML<br>
				<input type="checkbox" name="subject[]" value="css" checked>CSS<br>
				<input type="checkbox" name="subject[]" value="php" checked>PHP<br>
				<input type="checkbox" name="subject[]" value="c" checked>C PROGRAMMING<br>
				<input type="checkbox" name="subject[]" value="CPP" checked>C++ PROGRAMMING<br>
				<input type="submit" name="submit">
		</form>
	</body>
</html>