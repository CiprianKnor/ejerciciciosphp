<?php

class App
{
  public function __construct()
  {}
  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }
  
    $this->$method();      
  }

  public function home(){
      
    if(isset($_COOKIE['colores'])){
          $color = $_COOKIE['colores'];
    } else{
        header("Location: ?method=colores");
    }
    
    include("views/home.php");
  }

  public function colores(){
    include("views/colores.php");
  }

  public function cambio(){

    $color = $_POST['colores'];

    setcookie("colores", $color, time() + 3600);

    header("Location: ?method=home");
  }

  }