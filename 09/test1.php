<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
First Number<input name="v1" type="number" required value="50"><br><br>
Second Number<input name="v2" type="number" required value="30"><br><br>
<input type="submit" name="addbtn" value="+">
<input type="submit" name="subbtn" value="-">
<input type="submit" name="mulbtn" value="*">
<input type="submit" name="divbtn" value="/">
<input type="submit" name="modbtn" value="%">
</form>
<?php 
if(isset($_POST['addbtn']))
{
	$_firstvalue = $_POST['v1'];
	$_secondvalue = $_POST['v2'];
	echo "<h2>". ($_firstvalue+$_secondvalue) ."</h2>";
}
else if(isset($_POST['subbtn']))
{
	$_firstvalue = $_POST['v1'];
	$_secondvalue = $_POST['v2'];
	echo "<h2>". ($_firstvalue-$_secondvalue) ."</h2>";
}
else if(isset($_POST['mulbtn']))
{
	$_firstvalue = $_POST['v1'];
	$_secondvalue = $_POST['v2'];
	echo "<h2>". ($_firstvalue*$_secondvalue) ."</h2>";
}

else if(isset($_POST['divbtn']))
{
	$_firstvalue = $_POST['v1'];
	$_secondvalue = $_POST['v2'];
	echo "<h2>". ($_firstvalue/$_secondvalue) ."</h2>";
}
else if(isset($_POST['modbtn']))
{
	$_firstvalue = $_POST['v1'];
	$_secondvalue = $_POST['v2'];
	echo "<h2>". ($_firstvalue%$_secondvalue) ."</h2>";
}

?>
</body>
</html>