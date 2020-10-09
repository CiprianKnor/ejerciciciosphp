<?php

class app{
    public function __construct()
    {
    }
  
    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'index';
      }
    
   
      $this->$method();  
    }

  public function login(){
        ?> <form action="App.php" method="post">
        Usuario: <input type="text" name="user" required></br>
        Contraseña: <input type="password" name="password" required></br>
        <input type="submit" value="Enviar">
    </form><?php    
  }

  public function auth(){
    setcookie("user", "password", time() + 3600);

    //ojo para guardar arrays:
    $login = [$_POST['user'], $_POST['password']];
  }

  public function home(){
    if(isset($_POST) && isset($_COOKIE)){
        header('views/index.php');
        
    } else{
        header('App.php');
    }
  }

  public function logout(){
    if(isset($_GET) && isset($_COOKIE)){
        setcookie("user", "password", time() - 3600);
        header('views/login.php');
    }
  }

  public function index()
  {
    if (isset($_COOKIE)) {
      $user = $_COOKIE['user'];
      $hobbies = unserialize($_COOKIE['hobbies']);    
      $persona = unserialize($_COOKIE['persona']);    
      $hobbies2 = json_decode($_COOKIE['hobbies2']);    
      $persona2 = json_decode($_COOKIE['persona2']);    
    }
    
    // echo "Estamos en el index<br>";
    include('views/index.php');    
  }

}
?>