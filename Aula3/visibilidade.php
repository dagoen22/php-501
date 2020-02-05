<?php

class MinhaClasse
{
    //acessado por qualquer função em qualquer escopo
    public $publico = "publico";
    //acessado somente pela propria classe e suas herdeiras
    protected $protegido = "protegido";
    //Acessado somente pelo escopo desta classe
    private $privado = "Privado";

    private function printProperty()
    {
        echo $this->publico;
        echo $this->protegido;
        echo $this->privado;
    }
}
class MinhaClasse2 extends MinhaClasse
{
    //acessado por qualquer função em qualquer escopo
    public $publico = "publico2";
    //acessado somente pela propria classe e suas herdeiras
    protected $protegido = "protegido2";

    function printProperty()
    {
        echo "Minha classe2";
        echo "<br>";
        echo $this->publico;
        echo $this->protegido;
        echo $this->privado;
    }
}
$acessos = new MinhaClasse2();
// echo $acessos->publico;
// echo $acessos->protegido;
// echo $acessos->privado;
$acessos->printProperty();



