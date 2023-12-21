<?php

echo "<h1>ASSOCIAÇÃO entre objetos</h1>";

require "../classes/Fabricante.php";
require "../classes/Produto.php";

$produto = new Produto('Pen Drive',10,35);
$fabricante = new Fabricante("Kingston","Rua 25 de Março","NF 36.95.66");

$produto->setFrabricante($fabricante);
var_dump($produto->getFabricante()->getNome());
