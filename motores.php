<?php
   require_once './motor/Motor10.php';
   
   require_once './MWM/Motor20.php';
   require_once './Carro.php';
   //para usar 
   use Montadora\motor\Motor10;
   //apelido as
   use MWM\Motor20 as MWM;
   
    $motor = new Motor10();
    $motordisel = new MWM();
    
    $carro = new Montadora\Carro('Azul',$motor);
    
    $carro->abastecer(10);   
    $carro->ligar();
    $carro->desligar();
    
    var_dump($motor);
    var_dump($carro);
    var_dump($motordisel);
    
    
