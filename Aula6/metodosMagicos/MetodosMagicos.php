<?php

class MetodosMagicos
{
    
    //declarações de variáveis
    public $nome;
    
    /**
     * Classe com Vários métodos magicos do php
     * 
     * DocString - Documentação do seu modulo
     * Uma boa parte dos métodos magicos do php
     * @param string $nome String para nomear o objeto
     */
    function __construct($nome)
    {
        $this->nome = $nome;
        // $obj = new MetodosMagicos('umNomeQqr');
    }
    
    /**
     * Função destrutora
     * Executada na hora que meu objeto for destruido (espaço liberado da memória)
     */
    function __destruct()
    {
        echo "<br>";
        echo "Adeus mundo cruel";
        // unset($obj);
    }

    /**
     * Função Clone
     * Executada ao clonar um objeto
     */
    function __clone()
    {
        echo "Objeto sendo clonado";
        //$obj2 = clone($obj);
    }

    /**
     * Método toString
     * Usado na hora que o objeto tenta ser chamado como string
     */
    function __toString()
    {
        //retorno obrigatório
        return 'Ei, não faça isso';
        //echo $obj;
    }
    /**
     * Quando tentamos chamar o objeto como função
     */
    function __invoke()
    {
        // var_dump($this);
        echo "Este objeto não pode ser chamado como função";
        // $obj();
    }
    /**
     * sleep
     * Método usado quando serializamos um objeto
     */
    function __sleep()
    {
        echo "Indo dormir...";
        //Parâmetros para serem serializados
        return ['nome'];
        //$obj = serialize($obj);
    }
    /**
     * WakeUp
     * Método usado quando deserializamos um objeto
     */
    function __wakeup()
    {
        echo "Acordando Estou";
        // $obj = unserialize($obj);
    }
    /**
     * set
     * Quando tentamos instanciar um valor de variável
     */
    function __set($propriedade, $valor)
    {
        echo "Setando o valor $valor para o atributo $propriedade";
        // $this->$propriedade = $valor;
        // $obj->propriedade = 'valor';
    }
    /**
     * get
     * Chamado quando tentamos acessar um valor de propriedade
     */
    function __get($parametro)
    {
        echo "tentando acessar o valor $parametro";
    }
    /**
     * call
     * Quando tentamos acessar um método da classe
     */
    function __call($metodo, $argumentos)
    {
        echo "tentando acessar o método $metodo, com os parametros " . implode($argumentos);
    }
    /**
     * callStatic
     * Quando tentamos acessar um método da classe
     */
    public static function __callStatic($metodo, $argumentos)
    {
        echo "tentando acessar o método estático $metodo, com os parametros " . implode($argumentos);
    }
    /**
     * isset
     * Quando usamos a função isset para verificar a existencia do valor em um atributo
     */
    function __isset($propriedade)
    {
        echo "Tentando verificar a existência de $propriedade";
        // isset($obj->arg);
    }

}