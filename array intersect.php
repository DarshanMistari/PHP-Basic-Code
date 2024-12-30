<?php
$arr1=array("Darshan","Kalpesh","yogesh","Tushar");
$arr2=array("Ritesh","Darshan","Jayesh","Kalpesh");
$arr3=array_intersect($arr1,$arr2);
foreach($arr3 as $a)
{
echo"<br>".$a;
}
?>