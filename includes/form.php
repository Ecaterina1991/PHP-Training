<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>

<main>
  &amp;
  <form action="formhandler.php" method="post">
    <label for="firstname">Firstname?</label> <br>
    <input required id="firstname" type="text" name="firstname" placeholder="Firstname..."><br>

    <label for="lastname">Lastname?</label><br>
    <input id="lastname" type="text" name="lastname" placeholder="Lastname..."><br>

    <label for="favouritepet">Favourite Pet?</label><br>
    <select name="favouritepet" id="favouritepet">
      <option value="none">None</option>
      <option value="dog">Dog</option>
      <option value="cat">Cat</option>
      <option value="bird">Bird</option>
    </select><br>

    <button type="submit">Submit</button>
  </form>
</main>
  
</body>
</html>