<?php

// defining a constant
define("PI", 3.14);

echo nl2br("hello world\n");
$firstname = "aqib";
$lastname = "awan";
echo nl2br("Hi ".$firstname." ".$lastname."\n");
//to check that the first name is aqib or not
if($firstname == "aqib"){
    print nl2br("true\n");
}
else{
    echo nl2br("false\n");
}

//reversing the string 
$str1 = "hello world";
echo nl2br(strrev($str1)."\n");
//get tlength of string 
echo nl2br("String Length: ".strlen($str1)."\n");
// count number of words
echo nl2br("String word count: ".str_word_count($str1)."\n");

//array
$fruits = array("Apple", "Banana", "Orange");
//sort array 
sort($fruits);
//sort array descending order
rsort($fruits);
echo nl2br($fruits[2]."\n");
//counting the number of fruits
echo nl2br(count($fruits)."\n");
//associative aaray such as key and value concept
$fruits2 = array("Apple"=>"35", "Banana" => "5", "Orange" => 2);
// in above apple is key and 3 is its value same as others.
echo nl2br("Apple = ".$fruits2["Apple"]."\n");
//sort associative aaray
asort($fruits2);

//date -> date("l") shows only the current day of week
echo date("l");
echo "<br>";
?>

<?php
// use of var_dump function 
$variable1 = "aqib mehmood";
echo var_dump($variable1);
echo "<br>";

//use of constant
// the constant should be defined on the top of php
echo var_dump(PI);


?>

