<?php
/*
Entrar com 20 números e imprimir a soma
dos positivos e o total de números negativos
*/

$list = range(-10, 10);
$mix = null;
$negativos = null;
$total = 0;
for($i = 1; $i <= count($list)-1; $i++){
    
    $mix = rand(1, $list[$i]);
    if($mix < 0) {
        $negativos[] = $mix;
    }else{
        $total += $mix;
        echo $mix .'|'. $total . '<br>';
        
        
    }
    
}
echo count($negativos).' numeros negativos';