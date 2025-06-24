
<?php
// 3
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ $valor realizado com sucesso.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }

    public function sacar($valor) {
        if ($valor > 0) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
                echo "Saque de R$ $valor realizado com sucesso.<br>";
            } else {
                echo "Saldo insuficiente para saque.<br>";
            }
        } else {
            echo "Valor de saque inválido.<br>";
        }
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$conta1 = new ContaBancaria("Isabelle", 1000);

$conta1->depositar(500);   
$conta1->sacar(200);       
$conta1->sacar(2000);     


echo "Titular: " . $conta1->getTitular() . "<br>";
echo "Saldo atual: R$ " . $conta1->getSaldo() . "<br>";
?>