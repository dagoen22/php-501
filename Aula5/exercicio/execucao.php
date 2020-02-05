<?php

require "Carro.php";

$fusca = new Carro('volkswagen');

echo $fusca->acelerar();
echo "<br>";
echo $fusca->cor;