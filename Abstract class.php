<?php
abstract class darshan
{
private $a=10;
private $b=20;
public function get()
{
echo"A=".$this->a;
echo"<br> B=".$this->b;
}
abstract public function out();
}
class kalpesh extends darshan
{
public function A()
{
echo"<br>Hello Everyone";
} 
public function out()
{
echo"<br>This is a Abstract function";
}
}

$a=new kalpesh();
$a->get();
$a->A();
$a->out();

?>