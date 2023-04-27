<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

$bool=true;
$a = "1";
$b = 4;

$result = match ($a) {
 1, 4, 7 => "Variable a is equal to one!",
 2 => "Variable a is equal to two!",
 3 => "Variable a is equal to three!",
 default => "None were a match"
};

echo $result;




// switch($a) {
//     case 1:
//       echo "The first case is correct!";
//       break;
//     case 3:
//       echo "The second case is correct!";
//       break;
//     default:
//     echo "noooope"
// }



// if ($a < $b && !$bool) {
// echo "First condition is true!";
//   }
// else if ($a < $b && $bool) {
// echo "Second condition is true!";
// } else {
//   echo "None of the conditions were true";
// }


?>
  
</body>
</html>