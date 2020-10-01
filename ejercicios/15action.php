<?php

if ( !empty($_POST["nombres"]) && is_array($_POST["nombres"]) ) { 
    echo "<ul>";
    foreach ( $_POST["nombres"] as $nombre ) { 
            echo "<li>";
            echo $nombre; 
            echo "</li>"; 
     }
     echo "</ul>";
}

?>