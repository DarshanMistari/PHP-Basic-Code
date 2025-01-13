<?php
class a
{
public function show()
{
echo"<br> Calss A show";
}
}
class b extends a
{
public function display()
{
echo"<br> Class B Display";
}
}
class c extends b
{
public function get()
{
echo"<br>Class C get";
}
}
$c=new c();
$c->show();
$c->display();
$c->get();