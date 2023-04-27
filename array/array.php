<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>

<?php

$food = [
  "fruits" => array("apple", "banana", "cherry"),
   "meat" => array("chicken", "fish"),
   "vegetables" => array("cucumber", "carrot"),
   "vegetables2" => ["cucumber2", "carrot"],
];

echo $food["vegetables2"][0];

// $food = [
//   array("apple", "mango"),
//   "banana",
//   "cherry"
// ];

// echo $food[1];



// $fruits = ["Apple", "Banana", "Cherry"];
// $test = ["Mango", "Strawberry"];

// array_splice($fruits, 1, 0, $test);
// print_r($fruits);

//lui Mango i-am spus sa fie depozitat in index nr 1; 0 din pozitia trei semnifica aceea ca vor fi sterse zero elemente

//adaugam un element nou la array
// array_push($fruits, "Mango");
//O alternativa cu care putem adauga un element nou in array
// $fruits[] = "Mango";
// print_r($fruits);

// $tasks = [
//   "laundry" => "Daniel",
//   "trash" => "Frida",
//   "vacuum" => "Basse",
//   "dishes" => "Bella",
// ];

// echo $tasks["laundry"];

// print_r($tasks);
//echo count($tasks);  returneza numarul elementelor cheie valoare
//sort($tasks);  ordoneaza aflabetic elementele
// $tasks[] = "Tara";
// $tasks["dusting"] = "Tara";
// print_r($tasks);












































// $fruits = array("Apple", "Banana", "Cherry");
// $fruits = ["Apple", "Banana", "Cherry"];


// $fruits[] = "Orange";
// echo $fruits[3];

//replace - in loc de Banana vine Some Fruit
// $fruits[1] = "Some Fruit";

// echo $fruits[1];

//DELETE

// unset($fruits[1]); ----- nu este o idee buna a se folosi

// echo $fruits[1];

// array_splice($fruits, 0, 1);
// echo $fruits[0];

?>
  
</body>
</html>