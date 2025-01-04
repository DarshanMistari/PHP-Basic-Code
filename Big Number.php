<?php
$a=$_REQUEST['txtno1'];
$b=$_REQUEST['txtno2'];
$c=$_REQUEST['txtno3'];

if($a>$b)
{
     if($a>$c)
    {
      echo"A is Big";
    }
    else
   {
     echo"C is Big";   
   }
}
else
{
     if($b>$c)
    {
      echo"B is Big";
    }
    else
   {
      echo"C is Big";
   }
}
?>