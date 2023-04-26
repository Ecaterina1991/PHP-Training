<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP training</title>
</head>
<body>

<!-- https://www.youtube.com/watch?v=atNrwSTB3-c&ab_channel=DaniKrossing 
https://www.youtube.com/watch?v=FLs6rAVQWs0&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=4&ab_channel=DaniKrossing
al doilea link este link actualizat 2023-->

<!-- <?php 
echo "Hi!"; 
echo 'I\'m learning PHP'; //in acest exemplu folosim ghilimele simple si de asemenea in interiorul ghilimelelor simple avem in interiorul stringului alte ghilimele simple; pentru o sintaxa corecta folosim slash cu inclinare spre stanga fix inainte de apostroful din interiorul stringului
echo 10; 
echo "10"; //acelasi exemplu ca integer doar ca sub forma de string, dar in interiorul calculelor aritmetice php automat va transforma stringul in integer
if("10" !== 10) {
  echo "Aceste doua valori au tipuri de date diferite";
}
echo 10.5;
echo 28.35;
echo 1284.35276;//nu exista necesitatea utilizarii unei sintaxe specifice ca sa afisam un numar cu virgula, deci un numar de tip float; il putem afisa direct cu echo.
$a = true;
if($a===true) {
  echo"Variabila $a este adevarata";
}

//Variabile
//variabilele care contin o singura valoare se numesc scalare

$someInfo; // putem declara o variabila fara sa ii atribuim nimic si ii vom atribui ulterior o valoare. de ex cand le folosim in interiorul unor obiecte etc si situatia impune. si valoarea sa se schimba in functie de context. adica daca este foloseit intr-un context de stringuri, va obtine valoarea de empty string; in cazul integer si float devine zero valoarea implicita atribuita si ca operator boolean este false. cand ajunge la arrayuri - empty array. iar obiectele vor fi null. ca sa nu avem erori, mai nou, corect este sa atribuim aceste valori chiar si nule tuturor variabilelor ca sa nu avem erori.
$myName = "Ecaterina";

//Constante
CONST PI = 3.14;
CONST BRAVO = true;

//Array type
$names = array("Dana", "Iulia", "Ela");
$names = ["Dana", "Iulia", "Ela"];

//Object type
$object = new Car();
?> -->



<!-- 
Built-In Variabile superglobale in PHP  
variabilele globale pot fi apelate de oriunde din cod
Sintaxa clasica pentru variabilele superglobale este semnul $ apoi _ si apoi un cuvant cu majuscule apoi intre paranteze patrate 
-->

<!-- <?php
echo $_SERVER["DOCUMENT_ROOT"]; //calea catre documentul radacina
echo "<br>";
echo $_SERVER["PHP_SELF"]; //denumirea fisierului php in care lucram
echo "<br>";
echo $_SERVER["SERVER_NAME"]; //numele serverului. ex: localhost
echo "<br>";
echo $_SERVER["REQUEST_METHOD"]; // GET sau POST, ce metoda s-a folosit in fisierul nostru php
?> -->


<!-- am adaugat la url-ul meu ?name=ecaterina am dat enter. cu echo $_GET["name"] am obtinut ecaterina; datele apelate din url sunt tratate ca un array asociativ. am adaugat in url &mainskill=javascript
Folosim GET cand vrei sa primi date de la o baza de date sau de la un utilizator
-->
<!-- <?php
echo $_GET["name"]; // ecaterina
echo "<br>";
echo $_GET["mainskill"]; //javascript
?> -->

<!-- Metoda POST nu este vizibila in URL, desi putem avea aceeasi informatie vizibila, ceea ce este util cand lucram cu date cu caracter sensibil. Daca vrei sa dai submit datelor in baza de date a unui website, folosesti metoda POST. ex: formular de login - nu vrem ca datele sa fie vazute. dar daca vrem sa luam datele, folosim get method -->

<!-- metoda REQUEST va cauta GET, POST si Cookies cautand date in websiteul nostru; metoda REQUEST nu este in targetul nostru basic-->

<!-- <?php
echo $_REQUEST['name']; // ecaterina
?> -->

<!-- Variabila superglobala FILES - o folosim cand vrem sa aflam informatii despre un fisier care a fost uploadat pe server, de ex cand avem un formular HTML, inauntrul caruia putem permite utilizatorilor sa dea submit fisierelor (o imagine) si atunci trebuie sa verificam dublu tot ce tine de fisier si sa ne asiguram ca fisierul va fi uploadat pe website; spre exemplu, vrem sa verificam dimensiunea fiserului - aici utilizam aceasta variabila superglobala $_FILES[], care ne permite sa primim informatii despre fisierul pentru care se utilizeaza submit in formularul html-->

<!-- <?php
echo $_FILES["name"]; // ecaterina
?> -->

<!--$_COOKIE[]  un fisier mic pe care serverul il insereaza in calculatorul utilizatorului si cu aceasta variabila putem depozita sau lua informatii in websiteul nostru-->

 <!-- <?php
echo $_COOKIE["name"];
?> -->

<!-- putem stoca informatii despre utilizator inauntrul lui session, pe partea de server; putem lua date dinauntrul unui session sau dinauntrul unui cookie -->

<!-- <?php
$_SESSION["username"] = "Krossing";
echo $_SESSION["username"];
?> -->

<!-- enviroment sunt date cu caracter foarte sensibil pe care vrei sa le ai intr-un context particular in care lucrezi, care nu ar trebui sa fie accesibile utilizatorilor sau altor enviroment-uri-->

<!-- 
  <?php
$_ENV[""];
?> 
-->

<!-- aici le voi trece pe toate pentru vizualizare -->

<!-- <?php 
$_SERVER[""];
$_GET[""];
$_POST[""];
$_REQUEST[""];
$_FILES[""];
$_COOKIE[""];
$_SESSION[""];
$_ENV[""];
?> -->

<?php
$name = "Ecaterina Stefan";
$test = $name;
?>

<p>Salut! Numele meu este <?php echo $test; ?> si invat PHP!</p>

</body>
</html>
