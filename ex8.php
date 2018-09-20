<?php
/*
Criar um algoritmos que leia um número e
imprima todos os número de 1 até ele e o seu
produto.
*/

class Calc_prod {

    protected $arr_num;
    protected $min = 1;
    protected $max;
    public function __construct($max)
    {   
        $this->max = $max;
    }
    public function run()
    {

        for($i = $this->min; $i <= $this->max; $i ++){

            echo  $i.' | '. $i * $this->max.'<br>';
            
        }
    }
}

$c = new Calc_prod(23);

$c->run();