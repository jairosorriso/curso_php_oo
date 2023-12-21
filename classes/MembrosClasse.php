<?php

class MembrosClasse
{
    private $nome;
    private $genero;

    const GENERO = ['M' => 'Masculino','F' => 'Feminino'];

    public function __construct($nome, $genero)
    {
        $this->nome   = $nome;
        $this->genero = $genero;
    }   

    public function getNome()
    {
        return $this->nome;
    }

    public function getGenero()
    {
        return $this->genero;
    }
    
    public function getNomeGenero()
    {
        return self::GENERO[$this->genero];
    }
}