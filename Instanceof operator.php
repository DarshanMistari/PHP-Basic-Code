<?php
         class Developer   //class declaration
        {}
        class Programmer
        {}  //creating an object of type Developer

         $charu=new Developer();  //testing the type of object
         if($charu instanceof  Developer)
         {
              echo"Charu is a Developer.";
         } 
         else
         {
             echo"Charu is a Programmer.";
         }
         echo"</br>";
         var_dump($charu instanceof Developer);  //It will return true.
         var_dump($charu instanceof Programmer);  //It will return false.

?>
