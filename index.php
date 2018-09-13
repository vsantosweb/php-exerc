<?php
/*
Exercícios em PHP orientado a objetos
*/


/*
Construir um algoritmo que leia 2 números e
efetue a adição. Caso o valor somado seja
maior que 20, este deverá ser apresentando
somando-se a ele mais 8; caso o valor
somado seja menor ou igual a 20, este deverá
ser apresentado subtraindo-se 5
*/

class Ex1 {

    protected $num1;
    protected $num2;

    public function __construct() {
        
    }
    public function set_nums($n1, $n2){

        $this->num1 = $n1;
        $this->num2 = $n2;

        $this->calc_data();
        
    }
    private function calc_data() {

        $soma = $this->num1  + $this->num2;

        $compare = $soma > 20 ? $soma + 8 : $soma - 5;

    }

}

$ex1 = new Ex1();

$ex1->set_nums(10, 11);


/*
Entrar com um número e informar se ele é
divisível por 10, por 5, por 2 ou se não é
divisível por nenhum destes
*/

class Ex2 {

    protected $num;

    function __construct($n) {

        $this->num = $n;
        $this->calc();
    }

    protected function calc()
    {
        $last_num = substr($this->num, -1);

        if($last_num == 5){
            
            return 'Divisivel por 5';
        }elseif($last_num == 0)
        {
            return 'Divisivel por 10';
        }elseif($this->num % 2 ==0)
        {
            return 'Divisivel por 2';
        }else{
            return 'nenhum deles';
        }
    }

}

$ex2 = new Ex2 (135);


/*
Entrar com nome, sexo e idade de uma
pessoa. Se a pessoa for do sexo feminino e
tiver menos que 25 anos, imprimir nome e a
a mensagem: ACEITA. Caso contrário,
imprimir nome e a mensagem: NÃO ACEITA.
*/

class Ex3 {

    protected static $data;

    public function verify(){

        $registro = self::$data;
     
        if($registro['sexo'] == 'feminino' && $registro['idade'] < 25){
            echo 'ACEITA';
        }else{
            echo 'NÃO ACEITA';
        }
    }

    public function create($data) {
        
        self::$data = $data;
    }

}

$registro = array(
    'nome' => 'Amanda',
    'sexo' => 'feminino',
    'idade'=> '24'
);

$pessoa = new Ex3;
$pessoa->create($registro);

//$pessoa->verify();


/*
Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes)
*/

class Ex4 {

    private $numeros;

    public function __construct($list){

        $this->numeros = $list;

       $this->ordenate();
    }

    public function ordenate() {
       
         sort($this->numeros);

         return $this->numeros;
        
    }
}

$nums = range(0, 354);

for($i = 0; $i < count($nums); $i ++)
{
    $list[] = rand(0, $nums[$i]);

}
new Ex4($list);


/*
Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados
*/

class triangle {

    private $data;
    private $tipo;
    
    public function __construct($t)
    {
        $this->data = $t;
    }
    protected function set_type(){
        
        $lado = $this->data;
        return (($lado['A'] == $lado['B']) && ($lado['A'] == $lado['C']) && 
        ($lado['B'] == $lado['A']) && ($lado['B'] == $lado['C']) &&
        ($lado['C'] == $lado['A']) && ($lado['C'] == $lado['B']))? 'equilatero': 
        (($lado['A'] != $lado['B'] && $lado['A'] != $lado['C']) &&
        ($lado['B'] != $lado['A'] && $lado['B'] != $lado['C']) &&
        ($lado['C'] != $lado['A'] && $lado['C'] != $lado['B']) ? 'escaleno' : 'isósceles');
       
    }
    public function get_type(){
        
        return $this->set_type();
    }

}

$lado = array('A' => 3, 'B' => 23, 'C' => 3);

$triangulo = new triangle($lado);

 $triangulo->get_type();



/*

Ler um número inteiro entre 1 e 12 e escrever
o mês correspondente. Caso o número seja
fora desse intervalo, informar que não existe
mês com este número
*/


function check_mes($value){


    $mes_n = (($value) && ($value >= 1) && ($value <= 12) ? $value : exit('não existe mês com este número'));

    $date = DateTime::createFromFormat('!m', $mes_n);
    $mes = $date->format('F');

    return 'o mês é '. $mes;
}

echo check_mes(12);