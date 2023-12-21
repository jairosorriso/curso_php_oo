<?php

class Heranca
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;      
    }
}

class Funcionario extends Heranca
{
        private $cargo, $salario;

        public function contratacao($cargo, $salario)
        {
             if(is_numeric($salario) and $salario > 0){
               
                    $this->cargo = $cargo;
                    $this->salario = $salario;      

             }
        }
}