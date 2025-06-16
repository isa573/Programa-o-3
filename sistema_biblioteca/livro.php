<?php

class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel = true;
    protected $leitorAtual = null;

    // Construtor
    public function __construct($titulo, $autor, $anoPublicacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
    }

    // Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function setAnoPublicacao($ano) {
        $this->anoPublicacao = $ano;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    // Métodos da lógica
    public function emprestar($nomeLeitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro '{$this->titulo}' emprestado para $nomeLeitor.\n";
        } else {
            echo "Livro '{$this->titulo}' não está disponível.\n";
        }
    }

    public function devolver() {
        if (!$this->disponivel) {
            echo "Livro '{$this->titulo}' devolvido por {$this->leitorAtual}.\n";
            $this->disponivel = true;
            $this->leitorAtual = null;
        } else {
            echo "Livro '{$this->titulo}' já está disponível.\n";
        }
    }

    public function estaDisponivel() {
        return $this->disponivel ? "Disponível" : "Indisponível";
    }

    public function quemPegou() {
        return $this->leitorAtual ? $this->leitorAtual : "Nenhum leitor";
    }

    public function exibirInformacoes() {
        echo "Título: $this->titulo\n";
        echo "Autor: $this->autor\n";
        echo "Ano: $this->anoPublicacao\n";
        echo "Disponível: " . ($this->disponivel ? 'Sim' : 'Não') . "\n";
        echo "Emprestado para: " . $this->quemPegou() . "\n";
        echo "------------------------\n";
    }
}