<?php
/*
Ler vários números e informar quantos
números entre 100 e 200 foram digitados. Se
o valor 0 for lido encerrar a execução
*/



function read_list($limit){

    $list = rand(0, $limit);

    $collection = range(rand(0, $list), $list);

    $total = null;
    for($i = 0; $i < count($collection); $i++){

        if($collection[$i] == 0) {
            
            die('Zero não é permitido');
            return false;
        }
        if($collection[$i] >= 100 && $collection[$i] <= 200)
        {
            $total[] =  $collection[$i].'<br>';
            echo $collection[$i]. '<br>';
        }
    }
    
    if(isset($total)){
        $value = count($total);
        echo 'Existem '.$value. ' números entre 100 e 200';
    }else{
        echo 'array vazio';
    }
   
}


read_list(4000);