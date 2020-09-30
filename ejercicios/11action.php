<?php
if(isset($_POST) && !empty($_POST)){
    echo "El titulo del libro es $_POST[titulo], el autor es $_POST[autor], la editorial es $_POST[editorial] y tiene $_POST[paginas] paginas";
}
 else {
     echo "No hemos recibido nada!";
}

?>