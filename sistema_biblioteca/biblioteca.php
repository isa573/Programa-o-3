<?php

require_once 'Livro.php';
require_once 'Leitor.php';

class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "📚 Livros na Biblioteca '$this->nomeBiblioteca':\n";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        echo "👤 Leitores Cadastrados:\n";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
        }
    }
}