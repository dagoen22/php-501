<?php

require "FuncionalidadesCarro.php";

class Carro
{
    use FuncionalidadeDoCarro;

    public function __construct(
                                string $marca,
                                string $cor = "vermelho",
                                int $ano = 2010
                            )
    {
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }
    public function acelerar()
    {
        return "Vruuumm";
    }
    public function freiar()
    {
        return "Parando";
    }
}
