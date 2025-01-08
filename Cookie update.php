<?php
setcookie("username","I am not Dashan",time()+60*68*5);
?>
<html>
<head>
<?php
if(isset($_COOKIE["username"]))
{
echo"Cookie is Set ".$_COOKIE["username"];
}
else
{
echo"Cookie is not set ";
}
?>
</body>
</html>
