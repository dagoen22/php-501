<?php

class Quadrado implements Forma
{
    /**
     * Esta Classe Tem como funcionalidade calcular atributos 
     * de um Quadrado
     */
    public function __construct(float $lado)
    {
        $this->lado = $lado;
    }
    public function getArea(): float
    {   
        /**
         * Este método calcula a area de um Quadrado
         */
        return pow($this->lado, 2);
    }
}