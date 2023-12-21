<?php

echo "<h1>COMPOSIÇÃO entre objetos</h1>";

require "./classes/Fabricante.php";
require "./classes/Produto.php";
require "./classes/Caracteristica.php";

$produto = new Produto('Pen Drive',10,35);
$produto->addCaracteritica('cor','branco');
$produto->addCaracteritica('tamanho','pequeno');
$produto->addCaracteritica('peso','1gr');
$fabricante = new Fabricante("Kingston","Rua 25 de Março","NF 36.95.66");
$produto->setFrabricante($fabricante);

echo "Produto: " . $produto->getDescricao() . "<br>";
echo "Preço: " . $produto->getPreco() . "<br>";
echo "Estoque: " . $produto->getEstoque() . "<br>";
echo "Caracteristicas: <br>";
foreach($produto->getCaracteristica() as $caracteristica){
  echo $caracteristica->getNome() . " : " .$caracteristica->getValor()."<br>";
}

