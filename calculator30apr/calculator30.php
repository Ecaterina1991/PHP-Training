<!-- https://www.youtube.com/watch?v=d6dnCQS8DCk&t=1s&ab_channel=DaniKrossing -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator</title>
</head>
<body>
  <form method="GET">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
      <option value="none">None</option>
      <option value="add">Add</option>
      <option value="substract">Substract</option>
      <option value="multiply">Multiply</option>
      <option value="divide">Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
  </form>

  <p>Raspunsul este:</p>

  <?php
  if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];

  switch ($operator) {
    case "none": 
      echo "Trebuie sa selectezi un operator";
      break;
    case "add": 
      echo $result1 + $result2;
      break;
    case "substract": 
      echo $result1 - $result2;
      break;
    case "multiply": 
      echo $result1 * $result2;
      break;
    case "divide": 
      echo $result1 / $result2;
      break;
  }
}



$adunare = $result1 + $result2;

if ($adunare < 0) 
echo " Atentie, rezultatul nu poate fi negativ!"  

  ?>
  
</body>
</html>