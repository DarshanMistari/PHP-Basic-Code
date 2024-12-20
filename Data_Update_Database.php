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

$sql="update student set name='Kunal Mistari' where rollno=2";
$res = $con->query($sql);

if($res == true)
{
    echo("Data is Update in Database <br>");
}
else{
    echo("Data is Arleady Exists.");
}

?>