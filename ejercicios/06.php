<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array1 = ["lakers", "chicago bulls", "Hoonigan", "Mitsubishi" , "Nissan"];
    ?>

    <ul>
         <?php foreach ($array1 as $element){
    echo '<li>' . $element . '</li>';
} ?>
    </ul>

    <ul>
    <?php foreach ($array1 as $position=>$element){
    echo '<li>' . $position . '</li>';
} ?>
    </ul>
</body>
</html>