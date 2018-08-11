<?php
	$x=25;
	$y=20;
	$z=30;
	function add($no,$no2,$no3=0,$no4=0,$no5=0)
	{
		return $no+$no2+$no3+$no4+$no5;
	}
	
	echo add($x,$y,$z);
	echo "<br>";
	echo add($x,$z);
	echo "<br>";
	echo add(10,20,30,40);
	
?>