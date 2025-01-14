<?php
class darshan
{
private $a=0;
private $b=0;

public function getshow()
{
$this->a=30;
$this->b=20;
}
public function getA()
{
return $this->a;
}
public function getB()
{
return $this->b;
}
public function show()
{
echo"<br> getshow function";
}
}
class kalpesh extends darshan
{
public function get()
{
$this->c=parent::getA() + parent::getB();
echo"sum of the ".$this->c;
}
public function show()
{
parent :: show();
}
}

$a=new kalpesh();
$a->getshow();
$a->get();
$a->show();
