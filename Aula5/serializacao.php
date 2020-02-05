<?php

class Cachorro
{
    private $nome;
    private $raca;
    private $idade;
    private $cor;

    public function __construct(
                                $nome,
                                $raca
                                )
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = 0;
        $this->cor = 'Caramelo';
    }
    public function __sleep()
    {
        echo "Cachorro {$this->nome}, acaba de ir dormir";
        echo "<br>";
        return ['raca','idade','cor'];
    }
    public function __wakeup()
    {
        echo "Cachorro Está acordando de um longo sono";
        echo "<br>";
        $this->nome = 'Rex';
    }

    public function __toString()
    {
        // Método executado quando o objeto é chamado como string
        return "Objeto da classe Cachorro";
    }
    public function __invoke()
    {   //Método executado quando o objeto é chamado como função
        return "Isso é um objeto, não pode ser chamado";
    }
    public function __set($propriedade, $valor)
    {
        if(property_exists(__CLASS__,$propriedade)){
            $this->$propriedade = $valor;
            echo "$valor atribuido à $propriedade";
        } else{
            echo "Propriedade $propriedade não existe";
        }
    }
    
    public function __get($propriedade)
    {
        if (property_exists(__CLASS__,$propriedade)){
            return $this->$propriedade;
        } else{
            echo "Propriedade $propriedade não existe";
        }
    }
    public function __call($metodo, $argumentos)
    {
        if(method_exists(__CLASS__,$metodo))
        {
            echo "Chamando o método $metodo";
            return $this->$metodo(implode($argumentos));
        }else{
            echo "Método não existe";
        }
    }
    public function getRaca() : string
    {
        return $this->raca;
    }
    public function getNome() : string 
    {
        return $this->nome;
    }
    public function latir() : string
    {
        return 'Au au au';
    }
    public function dormir() : string
    {
        return "ZzZ..ZzZ..Zz";
    }
}

$dog1 = new Cachorro('Totó','Vira Lata');
// echo $dog1->getRaca();

// //serializando o cachorro (transformando ele em uma string unica de modo a consumir menos processamento na hora da execução)
// $dog1 = serialize($dog1);
// // deserializando o cachorro (transformando ele novamente em objeto)
// $dog2 = unserialize($dog1);
// var_dump($dog2);

// echo $dog2->latir();

// echo $dog1();
//$dog1->patas = 4;
// echo $dog1->patas;

echo $dog1->latir();

