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
// 1. Fa doua variabile numite number1 si number2 si seteaza una la valoarea de 10 si cealalta la valoarea de 20:

$number1 = 10;
$number2 = 20;

//2. Aduna doua variabile si afiseaza suma cu echo:

$sum = $number1 + $number2;
echo $sum;

//3. Fa doua Array-uri cu aceleasi valori, unul obisnuit si celalalt asociativ

$literatura = ['Oameni de hartie', 'Solenoid', 'Parfumul'];

echo $literatura[0];
echo "<br>";
$literatura2 = array('Oameni de hartie', 'Solenoid', 'Parfumul');
echo $literatura2[1];

echo "<br>";

$literaturaAutori = ['Oameni de hartie' => 'Salvador Plascenscia', 'Solenoid' => 'Mircea Cartarescu', 'Parfumul' => 'Patrick Suskind'];
print_r($literaturaAutori);
?>


  
</body>
</html>