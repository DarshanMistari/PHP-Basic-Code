<html>
<head>
<title> Receiver Data </tilte>
</head>
<body>
<h1> Receiver Data </h1>
<?php
if(isset($_GET['name']&& isset($_GET['age']))
{
$name=$_GET['name'];
$age=$_GET['age'];
echo"Name: $name";
echo"Age: $age";
}
else
{
echo"Data is not Send";
}
?>
</body>
</html>