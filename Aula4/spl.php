<?php

class Colecao implements Countable
{
    protected $itens = [];

    public function __construct(array $itens)
    {
        $this->itens = $itens;
    }

    public function count()
    {
        return count($this->itens);
    }

}

$colecao = new Colecao(['item 1','item 2','item 3','item 4']);
echo count($colecao);

foreach($colecao as $item)
{
    echo $item;
}