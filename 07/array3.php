<?php

// Associative array
// key => value

$test = array('Jan'=>570, 'Feb'=>750,'Mar'=>650);


var_dump($test);
//echo $test[0];
echo $test['Feb'];
$test['Feb'] = 850;
$test['Apr'] = 950;
var_dump($test);
var_dump($_GET);
var_dump($_POST);
var_dump($_SERVER);
$_GET['MAY'] = 750;
var_dump($_GET);
?>