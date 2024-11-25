<?php 
echo "my website";

$myName = 'evans';

var_dump ($myName);

$yearOfExperience = 5;

echo "<br>";

var_dump($yearOfExperience);

$height = 6.1;

echo "<br>";

var_dump ($height);

$isMale = true;
echo "<br>";
var_dump($isMale);

// array
$fullName = array ("evans", "edike", "edike");
echo "<br>";
var_dump ($fullName);
echo "<br>";
echo $fullName[1];

echo "<br>";

echo "my first name is $fullName[0]
and my surname is $fullName[1]";

// 28/10/2024
// NULL
$nothing = null;

echo "<br>";

var_dump ($nothing);

// costant
define("pi", 3.142);
echo "<br>";
var_dump(pi);

const gravityAccelaration = 10;

echo "<br>";

var_dump (gravityAccelaration);

// 31/10/2024
// operator. used to operate on variables. there about 7 operators
// arithmetic operators
$x = 10;
$y = 5;
echo $x + $y;
echo "<br>";

echo $x - $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x % $y;
echo "<br>";

echo $x ** $y;
echo "<br>";

// increment and decrement operators. two types exixts for both. post and pre
$x++;

echo $x;

echo "<br>";

$x--;

echo $x;

// Assignment operators. used to give a value to a variable.

$a = 100;
$b = 50;

// addition assignment
$a += $b;
echo "<br>";
echo $a;

// substraction assignment

echo "<br>";
// you can echo a function so the result just shows instead of echo the variables again after the function. e,.g below
echo $a -= $b;

// logical operators. to get a particular when some conditions are met
// examples of logical operators are: AND(&&) OR(||), XOR, NOT(!)
echo "<br>";
if ($a == 100 && $b == 50) {
   echo "we are good to go.";
}
echo "<br>";
if ($a == 100 || $b == 50) {
   echo "we are good to go.";
}
echo "<br>";
if ($a == 100 xor $b == 55) {
   echo "we are good to go.";
}
echo "<br>";
if (!($a == 101)) {
   echo "we are good to go.";
}

// 7/11/24 

// PHP Conditioners Statements. Very important in php 
// There are four notable Contional Statement in phd viz

// If Statement

// If... else Statement

// if... elseif... else Statement

// switch statement


// IF STATEMENT
//  _____________

// The if statement is among the most important statements in php

// Example:
// ___________
echo "<br>";
if (7>3) {
   echo "have a good day";
}

echo "<br>";
// variable declaration
$my_name = "Chika";

$present_time = date (format: "H:i");

echo "<br>";

echo "present_time: $present_time <br>";





if ($present_time >= 00.00 && $present_time < 12.00) {
echo "<h3> Good Morning, $my_name! </h3>";
}

elseif ($present_time >= 12.00 && $present_time <= 16.00) {
echo "<h3> Good afternoon, $my_name! </h3>";
}
elseif ($present_time >= 16.00 && $present_time <= 23.59) {
echo "<h3> Good night, $my_name! </h3>";
}

else {
   echo "<h3> Hello, $my_name! </h3>";

} 
// Switch Staement
// ________________

$today = date (format: "D");
echo "Today is: $today <br>";

// 8/11/2024
switch ($today) {
   case "Mon":
      echo "Hello everybody, It's Monday. Do have a great week";
      break;
   case "Tue":
      echo "Hello everybody, It's Tuesday. Do have a Splendid week";
      break;
   case "Wed":
        echo "Hello everybody, it's Wednesday. Do have a wonderful week!";
      break;
   case "Thu":
        echo "Hello everybody, it's Thursday. Do have a 
      miraculous week!";
      break;
   case "Fri":
        echo "Hello everybody, it's Friday. Do have a 
      Blessed week!";
      break;
   case "Sat":
        echo "Hello everybody, it's Friday. Do have a 
      fabulous week!";
      break;
   case "sun":
        echo "Hello everybody, it's Friday. Do have a 
      glorious week!";
      break;
      default:
        echo "sorry, this is not a day in the week!"; 
      break;
       }
       echo "<br>";

  
// 11/11/2024
 //  php loops

 /* numbers = 1;

 echo $numbers. "<br>";

 $numbers++;
 
 echo $numbers. "<br>"; 

$numbers++;

echo $numbers. "<br>"; */

// while loops

/* numbers = 1;

while ($numbers <= 10) {
   echo $numbers. "<br>";
   $numbers++;
   }*/
//   do while loops
/* $numbers = 11;
do {
echo $numbers. "<br>";
$numbers++;
} while ($numbers <= 10 */
 
// create an app that print number 1 to 100, print fizz for the 
// multiples of 3, and buzz for multiple of 5, print fizzbuzz
// for multiple of 15.
// for loop
for ($numbers = 1; $numbers <= 100; $numbers++) {
   if ($numbers % 15 == 0) {
      echo "fizzbuzz";
   } elseif ($numbers % 5 == 0) {
      echo "buzz <br>";
   } elseif ($numbers % 3 == 0) {
      echo "fizz <br>";
   }else {
      echo $numbers. "<br>";
   }
}
  
// for each

/*$cars = array ("BMW", "lexus" "ferari", "rollroyce");
echo " i love $cars [0] <br>";
echo " i love $cars [1] <br>";
echo " i love $cars [2] <br>";
echo " i love $cars [3] <br>";*/

$cars = array("BMW", "lexus", "ferarri", "rollroyce");

foreach ($cars as $car) {
   echo "i love $car <br>";
}



// 15/11/2024
// Arrays
$domesticAnimals = array ("Dog", "Cat", "Horse", "Goat", "Cow");

$cities = ['Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];

echo '<br>' . $domesticAnimals[0] . '<br>';
//  3 types of arrays in php. 
// Indexed array. it means number like the first item being zero in the above exambles
// Associative array. here the items are given a name
// Multip-dimensional array. arrays that have other arrays inside it.\

// count

echo count($domesticAnimals) . '<br>';

// array_push. used to input a new function to an array
array_push($cities, 'Abraka');

var_dump($cities);

// associate array
$phone = ['brand' => 'iphone', 'model' => '14 pro', 'color' => 'white', 'ROM' => 256];

echo '<br>';

var_dump ($phone);

$phone ['model'] = '15 pro';

echo '<br>';

var_dump ($phone);

// www.github.com/elvincedik/backend-project.git
//  function 

function greetMe () {
   echo "<br> Good Afternoon";
}

greetMe();

echo "<br>";
echo "<br>";

function streetName ($sname) {
   echo "$sname Asaba. <br>";
}

streetName("DLA");
streetName("Ezenei");

echo "<br>";
echo "<br>";

function HomeAddress ($snumber, $sname) {
   echo "$snumber street $sname Asaba. <br>";
}

HomeAddress("5th" , "DLA");
HomeAddress("8th" , "Ezenei");

?>

