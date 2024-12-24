<?php
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$city = $_POST['city'];

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "Students";

$con= mysqli_connect($servername , $user , $password , $dbname);

if($con -> connect_errno)
{
    echo("Connection is Fail..");
}

echo("Connection is SucessFully....<br>");

$sql = "insert into student Values('".$rollno."','".$name."','".$city."')";

$res = $con->query($sql);

if($res == true)
{
    echo("Data is Inserted SuccessFully..");
}
else
{
    echo("Data is not Inserted in Database");
}
?>