<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP training</title>
</head>
<body>

<?php 
echo "Hi! "; 
echo 'I\'m learning PHP'; //in acest exemplu folosim ghilimele simple si de asemenea in interiorul ghilimelelor simple avem in interiorul stringului alte ghilimele simple; pentru o sintaxa corecta folosim slash cu inclinare spre stanga fix inainte de apostroful din interiorul stringului
echo 10; 
echo "10"; //acelasi exemplu ca integer doar ca sub forma de string, dar in interiorul calculelor aritmetice php automat va transforma stringul in integer
if("10" !== 10) {
  echo "Aceste doua valori au tipuri de date diferite";
}
?>

  
</body>
</html>
