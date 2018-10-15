<?php 
  
  namespace Montadora;
  
  require_once 'Carro.php';
  class Carro16 extends Carro 
  {
    const POTENCIA=1.6;
    const PESO=1050;   
    protected $valvulas =16;

    public function vercor()
    {
        return $this->cor;  
    }
       /**
   *Liga o carro
   */
    public function ligar()
    {  
          parent::ligar();
          $this->quantCombustivel -=-1;
    }
    public function teste()
    {

    }

     public function __get($nome) {
         echo "16 Tentou Acessar atributos $nome \n";
         echo "O valor de $nome é ".$this->$nome;
     }
     public function __set($nome,$value) {
         echo "Setando valor :  $nome \n";
         $this->quantCombustivel -= -1;
     }
    public function __call($nome,$value) {
       echo 'Tentando executar o metodo';
     }     
        
   }

