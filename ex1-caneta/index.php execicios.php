<?php

class Produto{
    //definir atributos

    public $nome;

    public $preco;

    public $quantidade;

    public function exibirDetalhes() {
        echo "exibindo detalhes";
    }
}
    // como os atributos da classe Caneta são publicos, podemos acessá-los diretamente

$Produto1 = new Produto();
$Produto1->nome = "pistola";
$Produto1->preco = "99";
$Produto1->quantidade = "50";

echo "Nome: " . $Produto1->nome. ", " ; 
echo "Preço: " . $Produto1->preco. ", " ;
echo "Quantidade: " . $Produto1->quantidade.", <br>" ;
$Produto1->exibirDetalhes();


$Produto2 = new Produto();
$Produto2->nome = "Bola";
$Produto2->preco = "100";
$Produto2->quantidade = "50";

echo "<br>Nome: " . $Produto2->nome.", "  ;
echo "Preço: " . $Produto2->preco.", ";
echo "Quantidade: " . $Produto2->quantidade.", <br>";
$Produto2->exibirDetalhes();

function mostrarMediaPrecos ($Produto1, $Produto2){
$preco1 = str_replace(['R$', ','], ['', '.'], $Produto1->preco);
$preco2 = str_replace(['R$', ','], ['', '.'], $Produto2->preco);

$media = ($preco1 + $preco2) / 2;
echo "<br>A média dos preços dos produtos é: R$".number_format($media, 2, ',', '.')."<br>";
}
mostrarMediaPrecos($Produto1, $Produto2);




   
?>