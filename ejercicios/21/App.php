<?php

class App
{
  public function __construct()
  {
      session_start();
  }

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
      
    if(isset($_SESSION['colores'])){
          $color = $_SESSION['colores'];
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

    $_SESSION['colores'] = $color;

    header("Location: ?method=home");
  }

  }