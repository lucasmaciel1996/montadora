<?php
namespace Montadora\motor;
/**
 * @author Lucas
 * 
 */

 interface  InterfaceMotor
{
   public function ligar();
   public function desligar();
   public function acelerar($potencia);
   
   
}