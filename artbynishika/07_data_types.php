<?php

 $name= "rahul";
 $income = "3000";

 /* php data types
 1. String
 2. Integer
 3. Float
 4. Boolean
 5. Object
 6. Array
 7. Null 
*/

// String - Sequence of characters


// Array - use to store multiple value in single variable
$friends = array("Rahul","Ram","Shyam","Hari");

echo var_dump($friends);

echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";


//Null - means non (kuch bhi nahi)
$name =null;
echo var_dump($name);
?>