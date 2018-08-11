<?php

$conn = mysqli_connect("localhost","root","","php6pm");
	if(!$conn)
	{
		echo "fail";
	}
	$q="select * from students ";
	$result=mysqli_query($conn,$q);
	//var_dump($result);
	//echo $result->num_rows;
	echo "<a href='insertform.php'>Click Here to add new </a>";
	echo "<table border=0>";
	echo "<tr>
			<th>id</th>
			<th>name</th>
			<th>mobile</th>
			<th>email</th>
			<th>address</th>
			<th>gender</th>
			<th>batch</th>
			<th>Delete</th>
		
		</tr>";
	//echo "<select>";
	while($row=mysqli_fetch_array($result))
	{
	//echo "<pre>";
	//print_r($row);
		echo "<tr>
				<td> ".$row[0] ."</td>
				<td> ".$row['name'] ."</td>
				<td>".$row[2]."</td>
				<td> ".$row[3] ."</td>
				<td>".$row[4]."</td>
				<td> ".$row[5] ."</td>
				<td>".$row[6]."</td>
				<td><a href='delete.php?id=".$row[0]."'>delete</a></td>
			
			</tr>";
		//echo "<option> ".$row[1] ."</option>";
	}
	echo "</table>";
	
?>