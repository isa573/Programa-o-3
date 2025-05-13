<<?php 
class carro{
    private $cor;
    private $ano;
    private $modelo;

    public function __construct($cor, $ano ,$modelo )
    {
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
}
$carro = new carro();
$carro->setCor("azul");     
$carro->setAno(2015);
$carro->setModelo("uno");      




?>