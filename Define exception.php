<?php
$age=10;
try
{
if($age<18)
{
throw new Exception("Please enter the age greater than 18");
}
}
catch(Exception $ex)
{
echo $ex->getMassege();
}

?>