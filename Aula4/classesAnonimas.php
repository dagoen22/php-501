<?php

// final class MinhaClasse{
//     function apresentar()
//     {
//         return "Oiiee";
//     }
// }

// $obj = new MinhaClasse();
// echo $obj->apresentar();

//Classes anonimas 
//São estruturas de classes que não precisam
//ser declaradas em um escopo do projeto para serem utilizadas
var_dump((new class
{
    public $attr2 = 'oi';
    function apresentar()
    {
        return $this->attr2;
    }
})->apresentar());// Retorna objeto


//Função anonima para calculos matematicos

var_dump((new class(10,20){
    private $resultado;

    public function __construct($num,$num2)
    {
        $this->num = $num;
        $this->num2 = $num2;
        $this->resultado = $num + $num2;
    }
    public function dividir()
    {
        return $this->num / $this->num2;
    }
})->dividir());