<?php

trait Operacoes
{
    //Método somar para ser instanciado em uma classe
    public function somar($n1, $n2) : float
    {
        return $n1 + $n2;
    }
    //Método subtrair para ser instanciado em uma classe
    public function subtrair($n1, $n2) : float
    {
        return $n1 - $n2;
    }
    //Método multiplicar para ser instanciado em uma classe
    public function multiplicar($n1, $n2) : float
    {
        return $n1 * $n2;
    }
    //Método dividir para ser instanciado em uma classe
    public function dividir($n1, $n2) : float
    {
        return $n1 / $n2;
    }
}

trait OperacoesComplexas
{
    //metodo com mesmo nome
    public function somar(array $numeros) : float
    {
        return array_sum($numeros);
    }
    //método elevar para implementar em um classe
    public function elevar($num,$expo) : float 
    {
        return pow($num, $expo);
    }
    //método raizQuadrada para implementar em um classe
    public function raizQuadrada($num) : float
    {
        return sqrt($num);
    }
}

Trait Formatar
{
    public function quebrarLinha($numeroDeLinhas = 1)
    {
        for($i = 1; $i <= $numeroDeLinhas; $i++)
        {
            echo "<br>";
        }
    }
}
