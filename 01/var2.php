<?php 

$test = 'Karachi';

echo $test;
echo " &nbsp;&nbsp;&nbsp;";
echo gettype($test);
echo "<br>";
//   .    concatenate (join var or values)

$test = "PHP";
echo $test . " " . gettype($test) . "<br>";


$test = 458;
echo $test . " " . gettype($test) . "<br>";

$test = 45.8;
echo $test . " " . gettype($test) . "<br>";

$test = 458 . 58;
echo $test . " " . gettype($test) . "<br>";
// =   Assignment Operator
//  ;  Statement Terminator
// Comparison Operator ( ==,  === ,  >,  >=,   <,  <=  , !=  )

//		10 == 20		T-1, F-0	



$test = 458==258;
echo $test . " " . gettype($test) . "<br>";

$test = 458==458;
echo $test . " " . gettype($test) . "<br>";

$test = 458=="458";
echo $test . " " . gettype($test) . "<br>";

$test = 458==="458";
echo $test . " " . gettype($test) . "<br>";

$test = 458===458;
echo $test . " " . gettype($test) . "<br>";

$a = 20;
$b = $a;
$test = $a==$b;
echo $test . " " . gettype($test) . "<br>";


$a = 200;
$b = $a;
$test = $a>$b;
echo $test . " " . gettype($test) . "<br>";


$test = PHP;
echo $test . " " . gettype($test) . "<br>";


?>

