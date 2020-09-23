<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $divisor = 3;

        for($i = 1; $i <= 10; $i++){
            if($i % $divisor == 0){
                echo $i;
                echo "<br>";
            }
        }
    ?>
</body>
</html>