<?php

/*
Chico tem 1,50m e cresce 2 centímetros por
ano, enquanto Juca tem 1,10m e cresce 3
centímetros por ano. Construir um algoritmos
que calcule e imprima quantos anos serão
necessários para que Juca seja maior que
Chico
*/

Class Pessoa {

    private $dados;
    function __construct($arr)
    {
        $this->dados = $arr;
    }

    public function compare(){
        $dados = $this->dados;
        $contador = 0;
        $chico = $dados[0]['altura'];
        $juca = $dados[1]['altura'];
        $ano = 0;
        while($juca < $chico) {

            
            $chico += $dados[0]['cresc_ano'];
            $juca  +=  $dados[1]['cresc_ano'];
           
            $ano++;
            
        }
        echo $ano . ' Anos para que Juca seja maior que chico<br>';

    }
}


$p1 = array(

    0 => array(
        "nome" => "chico",
        "altura" => 1.50,
        "cresc_ano" => 0.02
    ),
    1 => array(
        "nome" => "Juca",
        "altura" => 1.10,
        "cresc_ano" => 0.03
    )
);
$pessoa = new Pessoa($p1);

$pessoa->compare();