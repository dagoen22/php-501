<?php

class Circulo implements Forma
{
    /**
     * Esta Classe Tem como funcionalidade calcular atributos 
     * de um circulo
     */
    public function __construct(float $raio)
    {
        $this->raio = $raio;
    }
    public function getArea(): float
    {   
        /**
         * Este método calcula a area de um circulo
         */
        return pow($this->raio, 2) * self::PI;
    }
}