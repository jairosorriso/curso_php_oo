<?php

abstract Class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;

        if($saldo > 0){
            $this->saldo = $saldo;
        } 
    }

    public function depositar($quantia)
    {
         if($quantia > 0){
            $this->saldo += $quantia;
         }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getInfo()
    {
        return "Agência {$this->agencia}<br>Conta {$this->conta}";
    }

    public function retirar($quantia)
    {
       if($this->saldo >= $quantia && $quantia > 0){
           $this->saldo -= $quantia;
       } else{
           return false;
       }

       return true;
    }
     

}