<?php
/*
Na usina de Angra dos Reis, os técnicos
analisam a perda de massa de um material
radioativo. Sabendo-se que este perde 25%
de sua massa a cada 30 segundos, criar um
algoritmos que imprima o tempo necessário
para que a massa desse material seja menor
que 0.10
*/


class Uranio {
    private $massa = 100;

}

$massa = 100;
function calc_perda($massa) {
    $c = 30;
    $x = 0;
    while($c > 0){
        
        
        ob_flush();
	    flush();
        sleep(1);
        $c--;
        echo ' ';
    }
    echo $c;
}

calc_perda($massa);
