Write a php code to Demostrate All 3 types of array in php.
<br>
<br>

1. Indexed Array
<br>
 
<?php

$name=array( "Kalpesh","Kunal","Hitesh","Paresh");

echo "Names : $name[0],$name[1],$name[2],$name[3] ";

?>

<br>
<br>
2.Associative Array
<br>

<?php

$salary=array("Sonu"=>"34000","Raju"=>"43000","Hitesh"=>"23000","Paresh"=>"64000");

echo" Sonu Salary :".$salary["Sonu"]."<br/>";

echo" Raju Salary :".$salary["Raju"]."<br/>";

echo" Hitesh Salary :".$salary["Hitesh"]."<br/>";

echo"  Paresh Salary :".$salary["Paresh"]."<br/>";

?>

<br>
<br>
3.Multidimensional Array
<br>

<?php

$emp = array
(
array(1,"Sonu",34000),
array(2,"John",54000),
array(3,"Kalpesh",32000)
);

for($row=0; $row < 3; $row++)
{
for($col =0; $col < 3; $col++)
{
  echo $emp [$row][$col]."   ";
}
  echo "<br/>";
}

?>
