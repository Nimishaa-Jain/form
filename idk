<?php
$localhost = "localhost";
$root = "root";
$password = "";
$db = "applicationform";
$con = mysqli_connect($localhost, $root, $password, $db);
if (isset($_POST['submit']))
{
    $candidate = $_POST['candidate'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $address = $_POST['address'];

    $loginsert = mysqli_query ($con, "INSERT INTO appform(candidate, password, email, telephone, address) VALUES ('$candidate', '$password', '$email', '$telephone', '$address')");

    if($loginsert)
    {
        echo "<b> YOUR FORM HAS BEEN SUCCESSFULLY SUBMITTED!!!! </b>";
    }
    else
    {
        echo " SORRY! FORM NOT SUBMITTED....";
    }
}
?>

<html>
    <head>
        <title> application form </title>
        </head>
        <body>
            <form method="POST">
                <h1> APPLICATION FORM </h1>
                <input type="text" name="candidate" placeholder="enter your name" required>
                <input type="password" name="password" placeholder="enter your password" required>
                <input type="email" name="email" placeholder="enter your email id" required>
                <input type="tel" name="telephone" placeholder="enter your phone no." required>
                <input type="text" name="address" placeholder="enter your current address" required>
                <input type="button" value="submit" name="submit">
                </form>
            </body>
    </html>
