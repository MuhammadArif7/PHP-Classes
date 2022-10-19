<?php 
if(!isset($_POST['btn']))
{
	header("location:myform.php");
}

// print_r(),  var_dump()

print_r($_POST);

echo "<hr>";

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<hr>";

var_dump($_POST);
var_dump($_GET);
//var_dump($_NOTHING);

?>