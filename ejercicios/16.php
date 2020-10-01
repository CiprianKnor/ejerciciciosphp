<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">

  <input type="text" name="nombres[]">
  <input type="submit" value="Nuevo"> 
  <hr> 
  
  <?php
  if (isset($_POST['nombres'])) {
    foreach($_POST['nombres'] as $nombre) {
      echo '<input type="text" name="nombres[]" value="' . $nombre . '"><br>';
    }
  }
  ?>
</form>

</body>
</html>