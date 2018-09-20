<?php

/*
Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo

Palavra: sonho
SONHO
SONHO SONHO
SONHO SONHO SONHO
SONHO SONHO SONHO SONHO
*/

class Sonho {

    private $palavra;

    function __construct($palavra){
        $this->palavra = $palavra;
    }
    public function display()
    {
      $limit = strlen($this->palavra);
      echo $limit;

      for($i = 1; $i <= $limit; $i++){

        echo ' '. $this->palavra. '<br> ';

        for($x = 1; $x <= $i; $x++)
        {
            echo ' '. $this->palavra;
        }
        
      }
    }
}

$sonho = new Sonho('SONHO');

$sonho->display();