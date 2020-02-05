<?php

require_once "autoload.php";
echo "<pre>";
//Clonando o objeto (Para ver a alteração, retirar a palavra clone)
$ap1 = new ApartamentoDoisDormitorios('',0);
echo "Antes de clonar";
echo "<br>";
$ap2 = clone $ap1;


//teste de id
var_dump($ap1);
var_dump($ap2);

//modificando atributos
$ap1->preco = 200000;
echo $ap1->preco .  " " . $ap2->preco; 