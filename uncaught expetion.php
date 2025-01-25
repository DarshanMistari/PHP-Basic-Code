<?php
$a=10;
$b=0;
try
{
$c=$a/$b;
echo"<br> division".$c;
}
catch(DivisionByZeroError $ex)
{
echo"<br> Please Dont devided by Zero";
}

?>