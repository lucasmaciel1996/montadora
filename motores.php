<?php
   require_once './motor/Motor10.php';
   
   require_once './MWM/Motor20.php';
   require_once './Carro.php';
   require_once './motor/Erro.php';
   //para usar 
   use Montadora\motor\Motor10;
   //apelido as
   use MWM\Motor20 as MWM;
   
    $motor = new Motor10();
    $motordisel = new MWM();
    
    $carro = new Montadora\Carro('Azul',$motor);
    
    $carro->abastecer(12);   
    $carro->ligar();
    try{
        echo "\nlinha 01 ";
        $carro->acelerar(99);
        echo "\nlinha 02 "; 
        $carro->acelerar(60);
        echo "\nlinha 03 "; 
        //verifica as execeções 
    } catch (Montadora\motor\Erro $ex) {
     echo  "Deu ruim 01 ;( " .$ex->getMessage();
    }
    catch (\Exception $ex) {
     echo  "Deu ruim ;( " .$ex->getMessage();
    }
    
    $carro->desligar();
    
    var_dump($motor);
    var_dump($carro);
    var_dump($motordisel);
    
    
