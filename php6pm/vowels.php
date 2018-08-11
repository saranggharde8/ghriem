<?php
	$string1=$_POST["string"];
	$a=substr_count("$string1","a");
	$e=substr_count("$string1","e");
	$i=substr_count("$string1","i");
	$o=substr_count("$string1","o");
	$u=substr_count("$string1","u");
	if($a>0)
	{
		echo "a is present"."<br>";
	}
	if($e>0)
	{
		echo "e is present"."<br>";
	}
	if($i>0)
	{
		echo "i is present"."<br>";
	}
	if($o>0)
	{
		echo "o is present"."<br>";
	}
	if($u>0)
	{
		echo "u is present"."<br>";
	}
	if($a || $e || $i || $o || $u)
	{
		echo "vowels are present";
	}
	else
	{
		echo "vowels are not present";
	}
?>