<?php
$name = "Rahul is good boy";
echo $name;
echo "<br>";

echo "The length of my string is " . strlen($name); //used to count the no. of word in a string
echo "<br>";
echo str_word_count($name); // used to count the word in sentence
echo "<br>";
echo strrev($name); // use to revere the string
echo "<br>";
echo strpos($name, "is");
echo "<br>";
echo str_replace("Rahul", "Om", $name); // str_replace used to replace word
echo "<br>";
echo str_repeat($name, 4);
echo "<pre>"; // <pre> tag is used to see to output as it input
echo rtrim("      this is computer     ");
echo "<br>";
echo ltrim("       this is computer      ");
echo "</pre>";




?>

