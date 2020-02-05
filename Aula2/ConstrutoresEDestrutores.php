<?php

require_once "autoload.php";

$ap1 = new ApartamentoDoisDormitorios('Avenida Paulista nº 5050',3);
$ap2 = new ApartamentoDoisDormitorios('Avenida Faria Lima nº 10',13 ,10);
//Verificando atributos do ap1
echo "Meu ap1";
echo "<br>";
echo "Endereço: " . $ap1->endereco;
echo "<br>";
echo "Andar: " . $ap1->andar;
echo "<br>";
echo "Numero: " . $ap1->numero;
//verificando atributos do ap2
echo "<br>";
echo "Meu ap2";
echo "<br>";
echo "Endereço: " . $ap2->endereco;
echo "<br>";
echo "Andar: " . $ap2->andar;
echo "<br>";
echo "Numero: " . $ap2->numero;

