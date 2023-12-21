<?php
require_once('Conta.php');

 class ContaPoupanca extends Conta
 {


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