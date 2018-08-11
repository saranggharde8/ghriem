<?php
	$stud=array("gauri","arohi","nikki","rashmi");
	$marks=array(10,20,30,40);
	
    for($i=0;$i<sizeof($marks);$i++)
	 {
	    echo  $stud[$i]. "got".  $marks[$i]."<br>";
     }
?>