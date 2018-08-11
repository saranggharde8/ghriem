<?php

echo "<hr><pre>";
print_r($_FILES);

$name=$_FILES['dp']['name'];
move_uploaded_file($_FILES['dp']['tmp_name'],"data/$name");
echo "<img src='data/$name'>";

?>