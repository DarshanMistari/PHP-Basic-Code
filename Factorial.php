<?php
function factorial($n)
{
if($n<0)
return -1;
if($n==0)
return 1;
else
return $n*factorial($n-1);
}
echo"Factorial No=".factorial(5);
?>