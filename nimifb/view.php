<?php

$localhost = 'localhost';
$root = 'root';
$password = '';
$db = 'fblogin';
$con = mysqli_connect($localhost, $root, $password, $db);

?>


<html>
<head>
<title> account </title>
</head>
<body>
okay

	<table border="1">
	<tr>
	<td> name </td>
	<td> surname </td>
	<td> date </td>
	<td> month </td>
	<td> year </td>
	<td> email </td>
	<td> password </td>
	</tr>
	<?php
     $query = "select * from loginfb ";
     $data = mysqli_query($con,$query);
    while($result = mysqli_fetch_array($data)){

    ?>
	<tr>
     <td><?php echo $result['fname']; ?> </td>
     <td><?php echo $result['lname']; ?> </td>
     <td><?php echo $result['number']; ?> </td>
     <td><?php echo $result['month']; ?> </td>
     <td><?php echo $result['year']; ?> </td>
     <td><?php echo $result['email']; ?> </td>
     <td><?php echo $result['password']; ?> </td>
  </tr>
  	<?php } ?>
   </table>
  

</body>
</html>