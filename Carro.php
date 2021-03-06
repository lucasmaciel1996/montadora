<?php
  namespace Montadora;
  
  require_once './motor/Motor10.php';
/**
 * @author Lucas Maciel
 */

class Carro
{
  const POTENCIA=1.0;
  const PESO=1000;
  
  
    
  public  $cor="Branco";
  private $combustivel ="Gasolina";
  protected $quantCombustivel =0;
  private $velocidade=0;
  private $kilometragem =0;
  //private $ligado=false;
  private $chassi ='xyz123'; 
  protected $valvulas =8;
  private $motor;
  /**
   * Construtor do Carro
   * @param type $cor
   */
  public function __construct($cor="Branco", $motor) {
      $this->cor =$cor;
      $this->motor =$motor;
      $this->chassi= uniqid();
  }

   /**
    *Liga o carro
    */
  public function ligar()
  {  
        if($this->quantCombustivel>0){
            
          $this->motor->ligar();
         
        }
       
  }
  /**
   * Desliga o Carro
   * 
   */
  public function desligar()
  {
          $this->motor->desligar();
    
  }
  /**
   * Para Freiar o Carro
   */
  public function freiar()
  {
      $this->acelerar(0);   
  }
  /**
   * Para fazer o carro se Movimentar
   * @param float $valor Velocidade do carro
   */
  public  function acelerar($valor)
  {
 
        $this->velocidade = $valor * self::POTENCIA;
        $this->alimentarCombustivel();
        $this->kilometragem +=$this->velocidade;
    
  }
  /**
   * 
   * @param fload $quant Quantidade em Litros
   */
  public function abastecer($quant)
  {
      $this->quantCombustivel +=$quant;
  }
  /**
   * Para virar o carro
   */
  public function virar()
  {
      
  }
  /**
   * Para Abastecer o Carro
   */
  private function alimentarCombustivel()
   {
      
      if($this->quantCombustivel >0){ 
          
          
        if($this->quantCombustivel <5)
        {
            //echo "Na reserva \n";
            throw new motor\Erro("Na reserva 5l");
        }
          $quant = static::POTENCIA * $this->velocidade* static::PESO;
          $this->quantCombustivel -= $quant/6000;
      }
      else
      {
          $this->desligar();
          throw new \Exception('Motor desligado');
      }
              
  }
  static public function obterPotencia()
  {
      return self::POTENCIA;
  }
  public function valvulas()
  {
      return $this->valvulas;
  } 
  public function __toString() {
      return static::PESO . " ".static::POTENCIA;
  }
 
}