<?php
	$number1=$_POST["number"];
	if($number1>=75)
		echo "distingtion";
	else if($number1>=60)
		echo "1st class";
	else if($number1>=50)
		echo "2nd class";
	else
		echo "fail";
?>
	