<?php
class bank
{
private $accno;
private $balance;

public function bank()
{
echo"It is a Constructor";
$this->accno=0;
$this->balance=0;
}

public function newaccno($a,$b)
{
$this->accno=$a;
$this->balance=$b;
}
public function deposite($x)
{
$this->balance=$this->balance+$x;
}
public function withdraw($y)
{
$this->balance=$this->balance-$y;
}
public function viewbalance()
{
echo"<br>Account No is:".$this->accno;
echo"<br>Bank Balance is :".$this->balance;
}
}

$cust1=new bank;
$cust1->newaccno(1234,5000);
$cust1->deposite(10000);
$cust1->withdraw(5000);
$cust1->viewbalance();





