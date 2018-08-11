<table border="1">
<?php
	
	$table=$_GET['no'];
	for($i=1;$i<=10;$i++)
	{
	echo "<tr><th>".$table*$i."</th></tr>";
	}
	
?>
</table>