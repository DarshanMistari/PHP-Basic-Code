<?php

class bike 
{
   function model ()
   {
     $model_name = "Royal Enfield";
     
     echo"Bike Model :".$model_name;
   }

}

$obj = new bike();
$obj ->model();

?>