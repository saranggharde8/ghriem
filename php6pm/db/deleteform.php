<html>
	<body>
		<form action="delete.php" method="get">
		<?php
			$conn = mysqli_connect("localhost","root","","php6pm");
			$q="select * from students ";
			$result=mysqli_query($conn,$q);
			echo '<select name="id">';
			while($r=mysqli_fetch_array($result))
			{
				echo '<option value="'.$r[0].'">'.$r[0].'-'.$r[1].'</option>';
			}
			echo '</select>';
		?>
			
			<input type="submit" value="delete">
		</form>
	</body>
</html>