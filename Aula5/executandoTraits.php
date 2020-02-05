<?php

require "funcionalidades.php";

//usando multiplas traits
class Calculadora
{
    //Caso não definido a ordem de prioridade
    //As traits vão utilizar por ordem de declaração
    //Os metodos que estão dando conflito
    use OperacoesComplexas,
        Operacoes,
        Formatar {
        Operacoes::somar insteadof OperacoesComplexas;
        OperacoesComplexas::somar as somarLista;
    }
}

//usando somente uma trait
class CalculadoraSimples
{
    use Operacoes;
}

//usando somente uma trait
class CalculadoraComplexa
{
    use OperacoesComplexas;
}
//objeto de calculadora
$calculo = new Calculadora;
//utilizando os metodos da trait Operacoes
echo "A soma de 2 com 3 da {$calculo->somar(2, 3)}";
$calculo->quebrarLinha();
echo "A Subtração de 5 com 2 da {$calculo->subtrair(5, 2)}";
$calculo->quebrarLinha();
echo "A multiplicação de 3 com 3 da {$calculo->multiplicar(3, 3)}";
$calculo->quebrarLinha();
echo "A divisão de 9 com 3 da {$calculo->dividir(9, 3)}";
$calculo->quebrarLinha();

// utilizando os metodos da trait OperacoesComplexas
echo "3 elevado ao quadrado da {$calculo->elevar(3, 2)}";
$calculo->quebrarLinha();
echo "a raiz de 9 é {$calculo->raizQuadrada(9)}";
$calculo->quebrarLinha();
echo "A soma de 3,2,1 é {$calculo->somarLista([3, 2, 1])}";
