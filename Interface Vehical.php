<?php

interface vehicle
{
public function start();
public function stop();
}

class car implements vehicle
{  
public function start()
{
echo"<br/> Car is Starting";
}
public function stop()
{
echo"<br/> Car is Stop <br/>";
}
}
class bicycle implements vehicle
{
public function start()
{
echo"<br/> Bicycle is Start";
}
public function stop()
{
echo"<br/> Bicycle is Stop";
}
}

$c=new car();
$c->start();
$c->stop();

$b=new bicycle();
$b->start();
$b->stop();
?>