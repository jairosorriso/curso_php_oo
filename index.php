<?php
require_once("classes/Conta.php");
require_once("classes/ContaPoupanca.php");
require_once("classes/ContaCorrente.php");
require_once("classes/Produto.php");
require_once("classes/Encapsulamento.php");
require_once("classes/Heranca.php");
require_once("classes/MembrosClasse.php");


$p1 = new MembrosClasse('Jairo Lima','M');
$p2 = new MembrosClasse('Ryanne Ibiapina','F');
echo $p1->getNome(). "<br>"; 
echo $p1->getNomeGenero() . "<br>";
echo $p2->getNome(). "<br>";
echo $p2->getNomeGenero() . "<br>";



