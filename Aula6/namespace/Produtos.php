<?php

//criar uma classe que possua um método chamado getItens
//Que retorna uma string falando "Retornando itens pela classe __class__"

namespace Produtos;

class Estoque
{
    public function getItens()
    {
        return "Retornando Itens pela class " . __CLASS__;
    }
}