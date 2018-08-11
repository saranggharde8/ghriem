<?php
	$stud=array("dhanashri"=>array("php"=>10,"html"=>20),
				"priyanka"=>array("css"=>11,"js"=>21,"html"=>22,"php"=>25),
				"jayashri"=>array("css"=>12,"html"=>22));
	
	
	
	
	foreach($stud as $name => $sub)
	{
		//echo "<table border=1>"
		//echo "<tr><th colspan=2>
		/*echo "$name <br>";
		echo "php=".$sub['php']."<br>";
		echo "html=".$sub['html']."<hr>";	*/
?>
		
	<table border=1>
	<tr>
		<th colspan=2> Marksheet</th>
	</tr>
	
	<tr>
		<td colspan=2><?php echo ucfirst($name); ?></td>
	</tr>
	<tr>
		<th>Sub Name</th>
		<th> marks</th>
	</tr>
	<?php
	$total=0;
		foreach($sub as $sname => $m)
		{
			
			$total +=$m;
			echo "<tr>
					<td>$sname</td>
					<td>$m</td>
				</tr>";
		}
	
	?>
	
	
	<tr>
		<th>total</th>
		<th><?php echo $total; ?></th>
	</tr>
</table>	
<br>
<?php		
	}
	
?>



