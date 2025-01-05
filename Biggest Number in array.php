<?php

$a = array(4,7,2,9,5);
$big = $a[0];

for($i=0; $i<count($a); $i++)
{
    if($a[$i] > $big)
    {
        $big = $a[$i];
    }
}
echo"Biggest Number =$big";

?>