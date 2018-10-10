<?php
 require_once 'Carro.php';

 $carro2 = new Carro();
 
 $carro2->cor='Vermelho';
 $carro2->abastecer(10);
 $carro2->ligar();
 $carro2->acelerar(60);
 
 $carro2->freiar();
 
 //var_dump($carro1);
 var_dump($carro2);
 