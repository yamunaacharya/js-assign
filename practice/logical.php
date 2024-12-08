<!-- write a PHP script to demonstrate the usage of logical operators with conditional statements. -->

<?php
   $marks = 12;
   $passmarks = 20;
   $fullattendence = true;

   if($marks <= $passmarks && $fullattendence ){
    echo "You are pass";
   }
    else{
      echo "you are fail";
    } 

    if($marks >= $passmarks || $fullattendence){
        echo "you are fail";
    }else{
        echo "you are pass";
    }

?>

   
