<?php
class bank
{
public $newacc;
public $balance;

public function newaccno($a,$b)
{
$this->newacc=$a;
$this->balance=$b;
}
public function deposite($a)
{
$this->balance=$this->balance+$a;
}
public function view()
{
echo"Account No =".$this->newacc;
echo"<br> Balance NO=".$this->balance;
}
}
$a=new bank;
$a->newaccno(133,5000);
$a->deposite(2000);
$a->view();
?>