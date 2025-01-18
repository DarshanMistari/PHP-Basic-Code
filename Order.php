<?php

echo"*** Menu ***";
echo"\n1.Ice Cream";
echo"\n2.Cone";
echo"\n3.Pestries";
echo"\n4.Exit";

$ono= (int) readline("Enter the Order Number");
if($ono==1)
{
echo"You have Ordered Ice Cream with Price 25 Rs.";
}
else if($ono==2)
{
echo"You have Ordered Cone with Price 35 RS";
}
else if($ono==3)
{
echo"You have Order Pestries with Price 45 Rs";
}
else if($ono==4)
{
echo"Thanks for Visit .Bye Bye ! ! !";
}
else
{
echo"Invalid order Number";
}
?>