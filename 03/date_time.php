<?PHP 

//  TIME(), DATE()
/*
date (string format,int timestamp)
d 	(1-31)
D 	(Mon to Sun)
l 	(Monday to Sunday)
m	(01 to 12)
M	(Jan to Dec)
F	(January to December)
Y	(1999 / 2013)
y	(99 / 13 )
A	(AM or PM )
h	(01 to 12 ) hour
H	(for 24 hours)
i	(01 to 59)minuts
s	(01 to 59) seconds
*/
echo time() . "<br>";
//1-1-1970

echo date("d-D-l") . "<br>";
echo date("m-M-F") . "<br>";
echo date("Y-y") . "<br>";
echo date("A-h-i-s") . "<br>";

echo date("D-d-F-Y || h:i:s") . "<br>";
echo date("D-d-F-Y || h:i:s",time()) ."<br>";
echo date("D-d-F-Y || h:i:s",900000000) ."<br>";
echo date("D-d-F-Y || h:i:s",(time()-8000000)) ."<br>";
echo date("D-d-F-Y || h:i:s",(time()+8000000)) ."<br>";
//   60-60-24-7
$tm = (60*60*24*31*12*2);
echo date("D-d-F-Y || h:i:s",(time()+$tm)) ."<br>";
echo date("D-d-F-Y || h:i:s",(time()-$tm)) ."<br>";

$tm = (60*60*24*7);
echo date("D-d-F-Y || h:i:s",(time()+$tm)) ."<br>";
echo date("D-d-F-Y || h:i:s",(time()-$tm)) ."<br>";

?>