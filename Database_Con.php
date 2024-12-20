<?php
$servername = "localhost";
$user = "root";
$password = "";

$conn = mysqli_connect($servername, $user , $password);

if($conn -> connect_error)
{
    die("Connection is Fail");
}

echo ("Connection is SuccessFully...");
?>