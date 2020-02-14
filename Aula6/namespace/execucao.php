<?php

include "Estoque.php";
include "Produtos.php";
use Estoque\Estoque;
use Produtos\Estoque as EstoqueProd;

$obj = new Estoque();
$obj2 = new \EstoqueProd();
echo $obj->getItens();