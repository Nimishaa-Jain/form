<?php
$localhost = 'localhost';
$root = 'root';
$password = '';
$db = 'justnewform';
$con = mysqli_connect($localhost, $root, $password, $db );

if ($con)
{
		//echo "ok";       
	}

if (isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];
	$fname = $_POST['fname'];
	$state = $_POST['state'];
	$password = $_POST['password'];
	$select = $_POST['select'];
	
	$loginsert = mysqli_query($con, "INSERT INTO insidenewform(name,email,tel,address,fname,state,password,select) VALUES('$name','$email','$tel','$address','$fname','$state','$password','$select')");
	
  	/*$loginsert = mysqli_query($con, "INSERT INTO form(name,tel,email,address,pass)  VALUES ('$name','$tel','$email','$address','$pass')");*/

	if($loginsert)
	{
		echo " Your Form Has Been Successfully Submitted!! ";
	}
	else
	{
		echo "Sorry! Form Not Submitted" .mysqli_error($con);
	  }
	
}

?>

<html>
<head>
<title> form </title>
</head>
<body>
<form action="" method="POST">
<h1> FORM </h1>
<input type="text" placeholder="please enter your name"  name="name">
<input type="email" placeholder="please enter your email id"  name="email">
<input type="tel"  placeholder="please enter your contact number" name="tel">
<input type="text"  placeholder="please enter your current address" name="address" >
<input type="text" placeholder="please enter your father's name" name="fname">
<input type="text" placeholder="please enter your state" name="state">
<input type="password" placeholder="please enter your password" name="password" >
<input type="text" placeholder="enter" name="select">


<input type="submit" value="submit" name="submit">
</form>
</body>
</html>