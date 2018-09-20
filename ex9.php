<?php

/*
Entrar com o número de vezes que se deseja
imprimir a palavra SOL e imprimir
*/

class Repetidor {

    private $num_vezes;
    private $word;
    private $contador = 0;

    public function set_loop($value, $word){
        
        $this->word = $word;
        $this->num_vezes = $value;
        $this->printer();
    }
    private function printer() {

        while($this->contador < $this->num_vezes)
        {
            echo $this->word .'<br>';

            $this->contador++;
        }
    }
}

$p = new Repetidor();

$p->set_loop(3, 'teste');