<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>

<form action="password.php">
<label for="fname">Nome utente:</label><br>
  <input type="text" id="fname" value="Nome Utente"><br><br>
  <label for="pw_lenght">Lunghezza password:</label><br>
  <input type="number" id="pw_lenght" min="6" max ="20">

  <input type="submit" value="Submit">

</form>
    
</body>
</html>