<?php 
class animal
{
public function eat()
{
echo"<br>Animal is eating";
}
}
class dog extends animal
{
public function bark()
{
echo"<br>Dog is Barking";
}
}
class cat extends dog
{
public function sleep()
{
echo"<br> Cat is Sleeping in morning";
}
}

$a= new cat;
$a->eat();
$a->bark();
$a->sleep();