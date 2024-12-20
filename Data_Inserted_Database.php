<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "Students";

$con = mysqli_connect($servername , $user , $password ,$dbname);

if($con -> connect_errno)
{
    echo("Connection is Fail. <br>");
}

echo("Connection is SuccessFully.. <br>");

// $sql="insert into student values(1 ,'Darshan Mistari','Pune')";
$sql="insert into student values(2 ,'Kalpesh Mistari','Nashik')";

$res = $con->query($sql);

if($res == true)
{
    echo("Data is Inserted in Database <br>");
}
else{
    echo("Data is Arleady Exists.");
}

?>