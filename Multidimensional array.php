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




















