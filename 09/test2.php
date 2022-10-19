<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
  Any Value: <input name="v1" type="number" required>  <br><br>
  <input type="submit" name="submit" value="?">
</form>
<?php 
if(isset($_POST['submit']))
{
	$_v1 = $_POST['v1'];
	if($_v1%2 == 0)
	{ 
		echo "<h2>Even</h2>";	
	}
	else
	{ 
		echo "<h2>Odd</h2>"; 
	}
}
?>
</body>
</html>