<?php
$servername="localhost";
$username="root";
$database="IGC";
$con=mysqli_connect($severname,$username,$database);

$sql="CREAT TABLE user (id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50)),age INT,email VARCHAR(100) UNIQUE)";

if($con>query($sql)  ){
echo'Tableis created successfully';
}
else
{
echo'Error creating table:'.$con>error;
}
$con>close();
?>