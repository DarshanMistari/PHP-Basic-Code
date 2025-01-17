<?php
interface swimer
{
public function swime();
}
interface flyer
{
public function fly();
}
class bird implements swimer,flyer
{
public function swime()
{
echo"<br> Bird is Swimming";
}
public function fly()
{
echo"<br> Bird is flying";
}
}
$a = new bird;
$a->swime();
$a->fly();