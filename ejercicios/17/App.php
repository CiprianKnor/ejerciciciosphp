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

    public function fibonacci()
    {
        $n1=1;
        $n2=0;

            while($n2 <= 800000){
                $suma=$n1+$n2;
                $n1=$n2;
                $n2=$suma;
                $lista[] = $suma;
            }
        include('views/01.php');
    }

    public function potenciados(){
    $potencias = [];
    

    for ($i=1; $i <= 24 ; $i++) { 
          $potencias[] = pow(2,$i);
         // echo("$potencias  ");
         }
      include('views/02.php');
         
    }

    public function primos(){
      $primos = [];

      for($i=1;$i<=10000; $i++){
        if($i % 2 != 0){
          $primos[] = $i;
        }
      }
      include('views/03.php');
      
    }

    public function factorial(){
      $factorial = [];

      $n1=1;
      $n2=2;

      for($i = 1; $i<=10;$i++){
        $multiplo=$n1*$n2;
        $n1=$multiplo;
        $n2=$i;
        $factorial[$n1] = $multiplo;
    }
      include ('views/04.php');
    }

    public function index()
  {
    include('views/index.php');
  }
}
?>