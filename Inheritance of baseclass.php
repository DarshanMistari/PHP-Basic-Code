<?php
class base
{
private $a=10;
private $b=20;
public function baseshow()
{
$this->a=10;
$this->b=20;

echo"<br> A=".$this->a;
echo"<br> B=".$this->b;
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
echo"<br> Base Show function";
}
}
class Derived extends base
{
public function derivedshow()
{
$this->c=parent::getA() + parent::getB();
echo"<br> Sum of the=".$this->c;
}
public function show()
{
echo"<br>Derived class show";
}
}

$obj=new Derived();
$obj->baseshow();
$obj->derivedshow();
$obj->show()

?>