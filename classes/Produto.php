<?php

class Produto 
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function __construct($descricao,$estoque,$preco)
    {
        
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->caracteristicas = [];
    }

    public function addCaracteritica($nome ,$valor)
    {
        $this->caracteristicas[]= new Caracteristica($nome,$valor);
    }

    public function getCaracteristica()
    {
        return $this->caracteristicas;
    }

    public function getDescricao()
    {
        return $this->descricao;    
    }

    public function setFrabricante(Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function setEstoque($unidades)
    {
        $this->estoque += $unidades;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setPreco($valor)
    {
        $this->preco = $valor;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }
}