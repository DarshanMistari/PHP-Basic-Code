<?php

$servername = "localhost";
$user = "root";
$password = "";

$con = mysqli_connect($servername , $user ,$password);

if($con -> connect_error)
{
    die("Conection is Fail.");
}

echo ("Connection is SuccessFully.. <br>");
$sql="create database Students";
$res = $con->query($sql);

if($res == true)
{
    echo("Database is Created");
}
else{
    echo("Database is Already Exists");
}
?>