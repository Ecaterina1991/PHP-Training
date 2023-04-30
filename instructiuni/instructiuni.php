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

//Fa un if statement cu elseif si else pentru a afisa in final un string care spune "Iubesc PHP"

// if (!true) {
//    echo "Ma imprietenesc cu PHP";
// } else if("10"===10) {
//   echo "As putea lua zece daca as sti de ce aceste doua valori nu sunt intrutotul egale";
// } else {
//   echo "Iubesc PHP!";
// }

//2. Fa un forloop care afiseaza 10 numere 

// for ($counter = 0; $counter < 10; $counter++) {
//   echo $counter;
// }

//Fa un switch statement care testeaza o conditie versus 5 cazuri

$cartiCitite = 1000;

switch($cartiCitite) {
  case 1000:
    echo "Felicitari! Ati citit 1000 de carti!";
    break;
  case 500:
    echo "Carti citite 500";
    break;
  case 600:
    echo "Carti citite 600";
    break;
  case 2000:
    echo "Carti citite 2000";
    break;
  case 100:
    echo "Carti citite 100";
    break;
    default: 
    echo "Imi pare rau dar nici unul dintre raspunsuri nu se potriveste cu numarul cerut de 1000 de carti citite";
    break;
}

?>

  
</body>
</html>