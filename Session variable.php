<?php
session_start();
$username=$_SESSION["username"]="Darshan";
$userid=$_SESSION["userid"]="101";
?>
<html>
<body>
<?php
echo "Username=".$username;
echo "<br>Userid=".$userid;
?>
</body>
</html>