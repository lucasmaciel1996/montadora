<?php
   namespace Montadora\motor;

    require_once 'InterfaceMotor.php';
/**
 * Description of Motor10
 *
 * @author aluno
 */
class Motor10 implements InterfaceMotor{
    private $ligado = false;
    private $potencia=0;


    /** 
    * Acelera o motor
    * @param  integer $potencia 
    */
    public function acelerar($potencia) {
        $this->potencia=$potencia; 
    }

   /**
    * Desliga o Motor 
    */
    public function desligar() {
        
    }
   /**
    * Liga o Motor 
    */
    public function ligar() {
        $this->ligado=true;
    }

}
