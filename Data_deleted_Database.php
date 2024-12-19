<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "CrudOperation";

$con = mysqli_connect($servername , $user , $password ,$dbname);

if($con -> connect_errno)
{
    echo("Connection is Fail. <br>");
}

echo("Connection is SuccessFully.. <br>");

$sql="delete  from student where rollno=1";
$res = $con->query($sql);

if($res == true)
{
    echo("Data is deleted in Database <br>");
}
else{
    echo("Data is Arleady Exists.");
}

?>