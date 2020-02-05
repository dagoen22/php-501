<?php

require_once "autoload.php";

//Acessando atributos da classe
echo ApartamentoDoisDormitorios::AREA;
echo "<br>";
echo ApartamentoDoisDormitorios::BANHEIROS;
echo "<br>";
var_dump(ApartamentoDoisDormitorios::ELETRICIDADE);
echo "<br>";

//Chamando um metodo de classe
ApartamentoDoisDormitorios::help();