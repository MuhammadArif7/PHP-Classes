<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 
//   SUPER GLOBAL ARRAY VARIABLES
//   $_POST[],  $_GET[], $_REQUEST[], $_SERVER, $_FILES[], $_SESSION, $_COOKIE...

echo $_POST['uname'] . "<br>";
echo $_POST['upass'] . "<br>";
echo $_POST['uemail'] . "<hr>";

$un =  $_POST['uname'];
$up =  $_POST['upass'];
$ue =  $_POST['uemail'];


echo $un . "<br>" . $up . "<br>" . $ue ."<br>";

?>



</body>
</html>