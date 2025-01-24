<?php

$arr = array(10,20,30,40,50);
$big = $arr[0];

for($i=0; $i<count($arr); $i++)
{
    if($arr[$i] > $big)
    {
        $big = $arr[$i];
    }
}
echo "largest Element of array:-",$max;

?>