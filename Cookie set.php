<?php
setcookie("username","Darshan",time()+60*60*24*7)
?>
<html>
<body>
<?php
if(isset($_COOKIE["username"]))
{
echo"Cookie is set ".$_COOKIE["username"];
}
else
{
echo"Cookie is not set ";
}
?>
</body>
</html>