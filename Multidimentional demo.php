//Multidimentional Array//
<?php
$arr=array(
array(1,"Darshan", 100000),
array(2,"Kalpesh",50000),
array(3,"Ravindra",150000)
);

for($row=0; $row<3; $row++)
{
for($col=0; $col<3; $col++)
{
echo $arr[$row] [$col]." ";
}
echo"<br>";
}

?>