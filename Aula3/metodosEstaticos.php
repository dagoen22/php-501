<?php

class MinhaClasse
{
    //Atributo estático de classe
    public static $atributo1 = 'Atributo 1';

    public static function valor()
    {
        self::$atributo1 = 'valor novo';
        return self::$atributo1; 
    }
}

class MinhaClasse2 extends MinhaClasse
{
    public function valor2()
    {
        // return parent::$atributo1;
        $this->atributo = parent::$atributo1;
    }
}

echo MinhaClasse::$atributo1;
echo "<br>";
MinhaClasse::$atributo1 = 'Valor modificado';
echo MinhaClasse::$atributo1;
echo "<br>";
echo MinhaClasse2::$atributo1;
echo "<br>";

$obj = new MinhaClasse2;
echo $obj->valor2();
