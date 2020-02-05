<?php

interface Carro
{
    //modelo do contrato
    public function acelerar();
    public function freiar();
    public function re();
    public function buzinar();

    const RODAS = 4;
}

class Fusca implements Carro
{
    // const RODAS = 3; // Não pode ser modificado
    // Precisa seguir os padrões da interface
    public function acelerar(){
        return "Trec Trec";
    }
    public function freiar()
    {
        return "Barulhos de carro desmontando";
    }
    public function re()
    {
        return "Barulhos de carro prestes a explodir";
    }
    public function buzinar()
    {
        return "Barulho menor que o do próprio motor";
    }
    public function abrirPortas()
    {
        return "Barulho de porta abrindo";
    }
}
$fusca = new Fusca();
echo $fusca->acelerar();