<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
First Name: <input type="text" name="User first" placeholder="First Name" required><br><br>
Last Name: <input type="text" name="User Last" placeholder="Last Name" required><br><br>
Full Name;<input type="text" name="username" placeholder="Full Name" required><br><br>
Password: <input type="password" name="User Password" placeholder="Password" required><br><br>
Email: <input type="email" name="U Email" placeholder="@gmail.com"><br><br>
Phone Number: <input type="tel"  name="User phone"><br><br>
Gender:&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="Male"  checked>Male &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="Female" checked>Female<br><br>
Country:<select name="UCountry">
        <option></option>
        <option>Pakistan</option>
        <option>India</option>
        <option>China</option>
        <option>Iran</option>
        <option>Japan</option>
        <option>U.S.A</option>
        <option>Span</option>
        <option>Afagnistan</option>
        <option>Africa</option>
        
        </select><br><br>
       <input type="submit"  name="btn"> 
</form
echo '<hr>'

<?php 



if(!isset($_POST['btn']))
{
$un = $_POST['username'];
	if($username=='Admin')
	
			{ echo '<h2>Welcome to your secure box</h2>';
			  echo '<h3>Check your Notifications</h3>';
				
				}
	else{ echo '<h2>User Name Inccorect</h2>';
			echo '<h2>Try Again</h2>';
		
		}
	
	
	}		







?>







</body>
</html>