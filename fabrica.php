<pre>
<?php
 require_once 'Carro.php';
 require_once 'Carro16.php';

 $carro2 = new Carro();
 $carro03 = new Carro16();
 
 $carro2->cor='Vermelho';
 $carro2->abastecer(10);
 $carro2->ligar();
 $carro2->acelerar(60);
 
 $carro2->freiar();
 //echo $carro2::$chassi ."\n";
 

// echo Carro::$chassi;
 
 //var_dump($carro1);
 echo $carro03->valvulas() ."\n";
 //echo $carro2->valvulas()."\n";
 
 echo $carro03;
 
 var_dump($carro2);
 var_dump($carro03);
 
 //echo carro03::POTENCIA;
 $nome ="Lucas";
 
 $func = function()use($nome){
     return $nome;
 };
 // invocando closure
echo $func() ."\n";
