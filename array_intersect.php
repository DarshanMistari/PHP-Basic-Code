<?php

$name1=array( "Darshan", "Kalpesh","Kunal","Dinesh");

$name2=array( "Ritesh","Kalpesh","Hitesh","Paresh");

$name3=array_intersect($name1,$name2);

foreach ( $name3 as  $n )
{
   echo "$n <br/>";
}

?>