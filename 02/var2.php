<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 

echo "<table width='600' border='1' cellspacing='0' cellpadding='7' align='center'>
  <tr>
    <th>Value</th>
    <th>Data Type</th>
  </tr>";
  
  $test = "Karachi"; 
  echo "<tr>
    <td>" . $test . "</td>
    <td>" .  gettype($test) . "</td>
  </tr>";
   $test = "23.34";
  echo "<tr>
    <td>" .  $test . "</td>
    <td>" . gettype($test) . "</td>
  </tr>
</table>";
?>

</body>
</html>