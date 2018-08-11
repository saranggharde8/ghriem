<?php
	$name1=$_POST['name'];
		echo "$name1<br>";
		
	$gender1=$_POST['gender'];
		echo "$gender1<br>";
		
	$education=$_POST['education'];
		echo "$education<br>";
		
	$subject1=$_POST['subject'];
	
	if($education=="BCA" || $education=="BSC" || $education=="BA")
	{
		if($gender1=="male")
		{
			echo sizeof($subject1)*100;
		}
		if($gender1=="female")
		{
			echo sizeof($subject1)*80;
		}	
		
	}
	if($education=="MCA" || $education=="MSC" || $education=="MA")
	{
		if($gender1=="male")
		{
			echo sizeof($subject1)*200;
		}
		if($gender1=="female")
		{
			echo sizeof($subject1)*160;
		}	
		
		
	}
	
	//print_r ($subject1);
	
	
?>