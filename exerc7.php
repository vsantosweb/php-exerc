
<?php

/*
A biblioteca de uma universidade deseja fazer
um algoritmo que leia o nome do livro que
será emprestado, o tipo de usuário (professor
ou aluno) e possa imprimir um recibo
conforme mostrado a seguir. Considerar que
o professor tem 10 dias para devolver o livro
o aluno somente 3 dias
*/

class Users
{
    protected $users = array(
        0 => array(
        'nome' => 'jose',
        'tipo' => 'Professor',
        'prazo'=> 10
        ),
        1 => array(
        'nome' => 'maria',
        'tipo' => 'aluno',
        'prazo'=> 3
        ),
        2 => array(
        'nome' => 'pedro',
        'tipo' => 'aluno',
        'prazo'=> 3
        )
    );
    protected $prazo_limit = array(3, 10);


    protected function setTipo()
    {

    }
}




class Biblioteca extends Users 
{
    private $books;
    
    protected function libraryList()
    {
        $list = '[{
            "tipo"    : "Ebook", 
            "nome"    : "Memórias de Um Sargento de Milícias", 
            "preco"   : 7.90, 
            "imagem"  : "milicias.jpg", 
            "autor"   : "De Almeida, Manuel Antônio", 
            "editora" : "Saraiva de Bolso", 
            "ISBN"    : "3658548"},
        
        {
            "tipo"    : "Ebook", 
            "nome"    : "Steve Jobs - A Biografia", 
            "preco"   : 32.50, 
            "imagem"  : "jobs.jpg", 
            "autor"   : "Isaacson, Walter", 
            "editora" : "Companhia das Letras", 
            "ISBN"    : "3681891"},
        {
            "tipo"    : "Ebook", 
            "nome"	  : "Gabriela, Cravo e Canela",
            "preco"	  : 20.50,
            "imagem"  : "gabriela.jpg", 	
            "autor"   : "Amado, Jorge",
            "editora" : "Companhia das Letras",
            "ISBN"    : "3529523"},
        {
            "tipo"    : "Ebook", 
            "nome"	  : "As Esganadas",
            "preco"	  : 25.00,
            "imagem"  : "josoares.jpg", 	
            "autor"   : "Soares, Jô",
            "editora" : "Companhia das Letras",
            "ISBN"    : "3687073"},
        {
            "tipo"    : "Ebook", 
            "nome"	  : "A Vida como ele é",
            "preco"	  : 16.90,
            "imagem"  : "nrodrigues.jpg", 	
            "autor"   : "Rodrigues, Nelson",
            "editora" : "Saraiva de Bolso",
            "ISBN"    : "3660846"},
        {
            "tipo"    : "Ebook", 
            "nome"	  : "Manuscrito encontrado em Accra",
            "preco"	  : 12.99,
            "imagem"  : "pcoelho.jpg", 	
            "autor"   : "Coelho, Paulo",
            "editora" : "Sextante",
            "ISBN"    : "4080653"},
        {
            "tipo"    : "Ebook", 
            "nome"	  : "Sagarana",
            "preco"	  : 11.90,
            "imagem"  : "sagarana.jpg", 	
            "autor"   : "Rosa, João Guimarães",
            "editora" : "Saraiva de Bolso",
            "ISBN"    : "4079707"},
        {
            "tipo"    : "Pdf", 
            "nome"    : "Anhangá - A fúria do Demônio", 
            "preco"   : "R$ 32,50", 
            "imagem"  : "anhanga.jpg", 
            "autor"   : "Modesto, J", 
            "editora" : "Giz Editorial", 
            "ISBN"    : "(Edição Digital) (3978238)"}
            ]';

            return json_decode($list, true);
    }
    public function search($user, $bookname)
    {
        $user_match = null;
        for($i = 0; $i <= count($this->users)-1; $i++){

            if(in_array($user, $this->users[$i])){
                
                $user_match = $this->users[$i];
            }
        } 
        (is_null($user_match) ? exit('Usuário Não encontrado') : (true) && $this->books = $this->libraryList());

        $book_match = null;
        
        
        for($i = 0; $i <= count($this->books)-1; $i++){

            if(in_array($bookname, $this->books[$i])){
                
                $book_match = $this->books[$i];
                
            }
        }

        (is_null($book_match) ? :('Livro não encontrado'));
        
        return array('user' => $user_match, 'book' => $book_match);
    }
}

$bbtc = new Biblioteca();

$search = $bbtc->search('jose', 'Manuscrito encontrado em Accra');


echo 'Olá '. $search['user']['tipo']. '(a) ' . $search['user']['nome']. '<br>';
echo 'Você Selecionou o Livro: '. $search['book']['nome']. '<br>';
echo 'O seu prazo de entrega é de: '. $search['user']['prazo'] . ' dias';


