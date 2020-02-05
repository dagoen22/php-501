<?php

trait Operacoes
{
    public function somar($n1,$n2)
    {
        return $n1 + $n2;
    }
    public function subtrair($n1,$n2)
    {
        return $n1 - $n2;
    }
    public function multiplicar($n1,$n2)
    {
        return $n1 * $n2;
    }
    public function dividir($n1,$n2)
    {
        return $n1 / $n2;
    }
}

class Calculadora
{
    use Operacoes;
}

$calculadora = new Calculadora();

echo $calculadora->somar(1,3);