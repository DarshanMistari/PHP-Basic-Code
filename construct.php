<?php  
class myclass
{
public $property;
public function _construct($a)
{
echo $this->property=$a;
}
}
$b = new myclass("Hello Every one");
echo $b->property;
?>