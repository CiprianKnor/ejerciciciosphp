<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2>Sesion</h2>

  <ul>
  <?php 
    foreach ($_SESSION as $cosa) {
      echo "<li> $cosa </li>";
    }
  ?>
  </ul>

  <a href="index.php?method=logout">Salir</a>
  
</body>
</html>