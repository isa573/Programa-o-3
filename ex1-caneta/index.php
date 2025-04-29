<?php
// Definindo a classe caneta

class Caneta{
    //definir atributos

    public $cor;

    public $marca;

    public $ponta;

    public $tamanho;

    public $carga;

    //definir metodos

    public function escrever() {
     echo "escrevendo...<br>";
    }
     public function rabiscar(){
        echo "Rabiscando...<br>";
    }
    public function sublinar(){
        echo "Sublinhando...<br>";
    }
    public function pintar(){
        echo "Pintando...<br>";
    }
}
// instanciando minha classe caneta
$caneta = new Caneta ();
// como os atributos da classe Caneta são publicos, podemos acessá-los diretamente
$caneta->cor = "azul";
$caneta->marca = "BIC";
$caneta->ponta = "0.5";
$caneta->tamanho = "grande";
$caneta->carga = 100;
// exibindo os atributos da caneta
 echo "Cor: " . $caneta->cor . "<br>";
 echo "Marca: " . $caneta->marca . "<br>";
 echo "Ponta: " . $caneta->ponta . "<br>";
 echo "Tamanho: " . $caneta->tamanho . "<br>";
 echo "Carga: " . $caneta->carga . "<br>";
 // chamando os metodos da caneta
 $caneta->escrever();
 $caneta->rabiscar();
 $caneta->sublinar();
 $caneta->pintar();



?>