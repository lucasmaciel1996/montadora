<?php
/**
 * @author Lucas Maciel
 */

class Carro
{
  public  $cor="Branco";
  private $peso =1000;
  private $combustivel ="Gasolina";
  private $quantCombustivel =0;
  private $velocidade=0;
  private $kilometragem =0;
  private $potencia=1.0;
  private $ligado=false;
  
  /**
   * Construtor do Carro
   * @param type $cor
   */
  public function __construct($cor="Branco") {
      $this->cor =$cor;
  }

   /**
    *Liga o carro
    */
  public function ligar()
  {  
        if($this->quantCombustivel>0){
            
          $this->ligado=true;
         
        }
       
  }
  /**
   * Desliga o Carro
   * 
   */
  public function desligar()
  {
          $this->ligado=false;
    
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
 
        $this->velocidade = $valor * $this->potencia;
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
        $quant = $this->potencia * $this->velocidade* $this->peso;
        $this->quantCombustivel -= $quant/6000;
      }
      else
      {
          $this->desligar();
      }
              
  }
}