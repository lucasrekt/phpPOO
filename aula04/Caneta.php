<?php 
class Caneta {
    private $_modelo;
    private $_cor;
    private $_ponta;
    private $_tampada;
    
    // public function Caneta() {} 
    // Quando criamos um metodo com o mesmo nome que a classe, ele assume o construtor.

    public function __construct($m, $c, $p)
    {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function getModelo() 
    {
        return $this->modelo;
    }
    
    public function setModelo($m) 
    {
        $this->modelo = $m;
    }

    public function getPonta() 
    {
        return $this->ponta;
    }

    public function setPonta($p) 
    {
        $this->ponta = $p;
    }
}
?>