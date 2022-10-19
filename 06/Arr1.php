<?php 
$test = array("Karachi",3,4,5,'CC',8,7,true,6,false,34.45,time(),'php class',date('d-M-Y'));

echo $test;
echo "<pre>";
print_r($test);
echo "</pre>";

echo $test[0] . "<br>";
echo $test[2] . "<br>";
echo $test[4] . "<br>";
echo $test[13] . "<br>";

?>