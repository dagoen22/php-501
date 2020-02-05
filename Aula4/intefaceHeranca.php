<?php

interface Humano
{
    const SAUDAVEL = true;
    public function comer(); 
}

interface Funcionario extends Humano
{
    public function atenderCliente();
}

interface Desenvolvedor extends Humano, Funcionario
{
    public function desenvolver();
}

class MultiTarefas implements Desenvolvedor
{
    const PACIENCIA = false;
    public function atenderCliente()
    {
        if(self::PACIENCIA == true){
            return "fazendo o melhor atendimento possível";
        }else{
            return "Realizando o atendimento";
        }
    }
    public function desenvolver()
    {
        return "Escrevendo códigos...";
    }
    public function comer()
    {
        return "10 minutos de almoço";
    }
}

var_dump(Humano::SAUDAVEL);
$dev = new MultiTarefas();
echo $dev->atenderCliente();
























