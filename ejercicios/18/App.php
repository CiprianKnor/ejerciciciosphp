<?php

class app
{
    public function __construct()
    {
    }

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'login';
        }


        $this->$method();
    }

    public function login()
    {
        include('views/index.php');
    }

    public function auth()
    {
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];

        setcookie("nombre", $nombre, time() + 3600);
        setcookie("password", $password, time() + 3600);


        header("location: index.php?method=home");
    }
    public function home()
    {

        include('views/home.php');
    }

    public function logout()
    {
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        setcookie("nombre", $nombre, time() - 1);
        setcookie("password", $password, time() - 1);
        header("location: index.php?method=login");
    }




    // public function index()
    // {
    //     if (isset($_COOKIE)) {
    //         $user = $_COOKIE['user'];
    //         $nombre = unserialize($_COOKIE['nombre']);
    //         $apellido = unserialize($_COOKIE['apellido']);
    //         $nombre2 = json_decode($_COOKIE['nombre2']);
    //         $apellido2 = json_decode($_COOKIE['apellido2']);
    //     }

    //     // echo "Estamos en el index<br>";
    //     include('views/index.php');
    // }
}
