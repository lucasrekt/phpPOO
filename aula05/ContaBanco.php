<?php 
class ContaBanco {
    // Atributos da Classe
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Funções da Classe
    function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    }
    function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito, impossível encerrar!</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " fechada com sucesso. </p>";
        }
    }
    function depositar($v) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v na conta de " . $this->getDono() . ".</p>";
            //$this->saldo = $this->saldo + $v; (Pode ser feito desta maneira também!)
        } else {
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }
    function sacar($v) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $v) {
                // $this->saldo = $this->saldo - $v;
                $this->setSaldo($this->getSaldo() - $v); 
                echo "<p>Saque autorizado de R$ $v na conta de " . $this->getDono() . ".</p>";
            } else {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        } else {
            echo "<p>Não posso sacar de uma conta fechada.</p>";
        }
    }
    function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v debitada na conta de  " . $this->getDono() . ".</p>";
        } else {
            echo "<p>Problemas com a conta. Não posso cobrar.</p>";
        }
        
    }

    // Construtor
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    // Getters and Setters
    function getNumConta() {
        return $this->numConta;
    }
    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }
    function getTipo() {
        return $this->tipo;
    }
    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    function getDono() {
        return $this->dono;
    }
    function setDono($dono) {
        $this->dono = $dono;
    }
    function getSaldo() {
        return $this->saldo;
    }
    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    function getStatus() {
        return $this->status;
    }
    function setStatus($status) {
        $this->status = $status;
    }
}
?>