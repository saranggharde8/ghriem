<?php
	//$names=array("dhanashri","gauri","priyanka");
	$marks=array("dhanashri"=>10,"priyanka"=>20,"jayashri"=>30);
	//echo $marks['dhanashri'];
	//print_r($marks);
	/*for($i=0;$i<sizeof($marks);$i++)
	{
		echo $names[$i] ." got ". $marks[$i]. " Marks<br>";
	}*/
	foreach($marks as $k => $v)
	{
		echo "$k got $v marks"."<br>";
	}

?>