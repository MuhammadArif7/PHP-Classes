<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form method="post" action="#">
User Name: <input type="text" name="uname" required>
<input type="submit" value="Login">
</form>
<?php 
$un = $_POST['uname'];
if($un=='Admin')
{
	echo "<h2>Welcome to $un </h2>";
	echo "<h2>Please Update your Profile</h2>";
	echo "<a href='profile.php'>Profile</a>";
}
else
{
	echo "<h2>Welcome to $un</h2>";
	echo "<h3>Please Join Us</h3>";
	echo "<a href='register.php'>Register Now</a>";
}
?>


</body>
</html>