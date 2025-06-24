<!-- 1) uma classe é um modelo ou projeto para criar objetos, enquanto um objeto é uma instância específica dessa classe.
     A classe define as características (atributos) e o comportamento (métodos) que os objetos terão. 
Exemplo:
Imagine uma classe chamada Cachorro. Essa classe pode ter atributos como nome, raca, e idade, e métodos como latir e comer. 
Um objeto específico dessa classe poderia ser um Cachorro chamado "Rex",
 da raça "Golden Retriever", com 3 anos de idade. Esse objeto "Rex" seria uma instância da classe Cachorro -->

 <!--2-->

 <?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "O livro '{$this->titulo}' foi emprestado.<br>";
        } else {
            echo "O livro '{$this->titulo}' não está disponível.<br>";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        echo "O livro '{$this->titulo}' foi devolvido.<br>";
    }

    public function getTitulo() {
        return $this->titulo;
    }
}

class Aluno {
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function pegarLivro(Livro $livro) {
        echo "Aluno {$this->nome} tentou pegar o livro '{$livro->getTitulo()}'.<br>";
        $livro->emprestar();
    }
}

$livro1 = new Livro("PHP para Iniciantes", "João Silva");
$livro2 = new Livro("Programação Orientada a Objetos", "Maria Souza");

$aluno1 = new Aluno("Isabelle", "2025123");

$aluno1->pegarLivro($livro1); 
$aluno1->pegarLivro($livro1); 

$livro1->devolver();          
$aluno1->pegarLivro($livro1); 
?>



<?












