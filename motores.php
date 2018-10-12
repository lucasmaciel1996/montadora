<?php
   require_once './motor/Motor10.php';
   require_once './Carro.php';
   
    $motor = new Motor10();
    
    $carro = new Carro('Azul',$motor);
    
    $carro->abastecer(10);   
    $carro->ligar();
    $carro->desligar();
    
    var_dump($motor);
    var_dump($carro);
    
    
