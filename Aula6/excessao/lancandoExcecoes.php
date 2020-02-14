<?php

class Comer
{
    public function __construct(bool $vegano)
    {
        $this->vegano = $vegano;
    }
    public function churrasco()
    {
        if ($this->vegano) {
            //echo "Não como carne, vim para fazer uma média";
            throw new Exception('Eu NUNCA iria em um churrasco');
        } else {
            echo "Estou comendo todas as carne possíveis";
        }
    }
}

$vegano = new Comer(true);

try {
    $vegano->churrasco();
} catch (\Exception $e) {
    echo "Vegano Não compareceu no churrasco";
    echo "<br>";
    // echo $e;
    // die('Deu certo não :-(');
} finally {
    echo "Todos se divertiram";
}
