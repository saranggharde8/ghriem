<?php
	$str=$_POST["text"];
	$str1=$_POST["word"];
	//echo $str;
	$presentword=strpos("$str","$str1");
	$replace1=str_replace("$str1","me","$str");
	//$count=str_word_count("$str");
	//echo $presentword."word are present in paragraph"."<br>"
	echo $replace1."<br>";
	//echo $count."words are"."<br>";
?>