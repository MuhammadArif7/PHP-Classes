<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<table width="600" border="1" cellspacing="0" cellpadding="7" align="center">
  <tr>
    <th>Value</th>
    <th>Data Type</th>
  </tr>
  <?php $test = "Karachi";  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
  <?php  $test = "23.34";  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
   <?php  $test = 23.34;  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
  <?php  $test = 2334;  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
  <?php  $test = true;  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
  <?php  $test = false;  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
  <?php  $test = 50>30;  ?>
  <tr>
    <td><?php echo $test; ?></td>
    <td><?php echo gettype($test); ?></td>
  </tr>
</table>


</body>
</html>