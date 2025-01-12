<?php
class vehical
{
public function start()
{
echo" <br> Vehical start";
}
}
class car extends vehical
{
public function color()
{
echo" <br>Car is white color";
} 
}
class motorcycle extends vehical
{
public function name()
{
echo"<br> Motorcycle is Averanger";
}
}

$a= new car();
$a->start();
$a->color();

$b= new motorcycle();
$b->start();
$b->name();

