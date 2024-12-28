Write a php code to Demostrate All Array Function.

<br>
<br>
1.array()
<br>

<?php

$season=array("summer","winter","spring","autumn");
echo "season are: $season[0], $season[1], $season[2], $season[3] "; 

?>

<br>
<br>
2.array change_key_case()
<br>

<?php

$salary =array("Kalpesh"=>"50000", "Sagar"=>"20000", "Kunal"=>"80000");

print_r(array_change_key_case($salary,CASE_UPPER));

?>

<br>
<br>
3.array_chunk
<br>

<?php

$name=array("Kalpesh","Nitin","Kunal","Sagar","Mahesh");

print_r(array_chunk($name,2));

?>

<br>
<br>
4. count()
<br>

<?php

$city=array("Mumbai","Nashik","Pune","Indore");

echo count($city);

?>


<br>
<br>
5.sort()
<br>

<?php

$season=array("summer","winter","spring","autumn");

sort($season);

foreach( $season as $s )
{
   echo "$s  <br/>";
}

?>

<br>
<br>
6.array_reverse()
<br>

<?php

$season=array("summer","winter","spring","autumn");

$reverseseason=array_reverse($season);

foreach( $reverseseason as $s )
{
    echo "$s <br/>";
}

?>

<br>
<br>
7.array_search
<br>

<?php

$city=array("Pune","Mumbai","Nashik","Jalgaon");

$key=array_search("Jalgaon",$city);

echo $key;

?>

<br>
<br>
8.array_intersect()
<br>

<?php

$name1=array( "Darshan", "Kalpesh","Kunal","Dinesh");

$name2=array( "Ritesh","Kalpesh","Hitesh","Paresh");

$name3=array_intersect($name1,$name2);

foreach ( $name3 as  $n )
{
   echo "$n <br/>";
}

?>



