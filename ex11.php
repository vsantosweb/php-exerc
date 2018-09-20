<?php

/*
Criar um algoritmos que imprima a tabuada
de um número
*/
class Tabuada {

    private $produto;
    private $limit = 10;

    function __construct($numero)
    {
        $this->produto = $numero;
        $this->calc();
    }
    private function calc()
    {
        $count = 0;
        while($count < $this->limit ){

            $count++;
            echo $this->produto * $count. '<br>';
        }
    }

}

$tabuada = new Tabuada(10);