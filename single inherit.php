<?php
class animal
{
public function dog()
{
echo"<br>Dog is eating";
}
public function runing()
{
echo"<br>Dog is Runing ";
}
}
class cow extends animal
{
public function eat()
{
echo"<br>Cow is eating Grass";
}
}
$a= new cow;
$a->dog();
$a->runing();
$a->eat();