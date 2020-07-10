<?php 
   // $var = $_POST['data'];
   // echo  $var;

   // var_dump(json_encode($var));
   // $myObj = new;
   $myObj->name = "John";
   $myObj->age = 30;
   $myObj->city = "New York";

   $myJSON = json_encode($myObj);
   echo $myJSON;
 ?>