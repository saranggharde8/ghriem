<?php
$roll=$_REQUEST['roll'];
/*switch($roll)
{
	
	case 1:
		echo "prasad";
		break;
	case 2:
		echo "gauri";
		break;
	
	case 3:
		echo "aarohi";
		break;
	
	case 4:
		echo "ajay";
		break;
	case 5:
		echo "minal";
		break;
	case 6:
		echo "bhushan";
		break;
	default:
		echo "enter valid roll no";
		
} */
//echo "Hello Jalgaon";

$conn=mysqli_connect("localhost","root","","kamesh");
$q="select * from student where name like '$roll%'";
$res=mysqli_query($conn,$q);
echo "<ul>";
while($data=mysqli_fetch_row($res))
{
	echo "<li>$data[0]</li>";
}
echo "</ul>";
?>