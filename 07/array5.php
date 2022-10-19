<?php

$pc=array(
	'Adil'=>array('eng'=>56,
				  'urd'=>78,
				  'mth'=>89),
	'Adnan'=>array('eng'=>45,
					'urd'=>56,
					'mth'=>67),
	'Babar'=>array('eng'=>99,
					'urd'=>88,
					'mth'=>77)
					);
var_dump($pc);					

echo $pc['Adil']['urd']."<br>";
echo $pc['Babar']['urd']."<br>";

?>