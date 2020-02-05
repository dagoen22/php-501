<?php

class ApartamentoDoisDormitorios
{
    //Atributos de objeto
    public $quartos = 2;
    public $paredes = 5;
    public $janelas = 1;
    public $piso = 'Porcelanato';
    public $preco = 180000;

    //Atributos da classe
    const AREA = 35;
    const BANHEIROS = 1;
    const ELETRICIDADE = true;

    //Metodos magicos de classe
    //Metodo para quando um objeto dessa classe for clonado
    public function __clone()
    {
        echo "Construindo um predio parecido";
        echo "<br>";
    }
    //Metodo executado na hora de criar um objeto
    public function __construct(
        string $endereco,
        int $numero,
        int $andar = 1
    ) {
        $this->numero = $numero;
        $this->endereco = $endereco;
        $this->andar = $andar;
        echo "Construindo um objeto";
        echo "<br>";
    }
    //Metodo executado na hora que o endereco de memoria eh desalocado
    public function __destruct()
    {
        echo "<br>";
        echo "Destruindo o objeto";
        echo "<br>";
    }
    //Metodos do objeto
    public function abrigar()
    {
        echo "Abrigando " . $this->preco;
        echo "<br>";
    }
    public function get_andar()
    {
        echo $this->andar;
        echo "<br>";
    }
    // Metodos de classe
    public static function help()
    {
        echo "Essa classe cria um ap de 2 dormitorio";
    }
}
// //Criando Objetos
// $ruaVergueiro = new ApartarmentoDoisDormitorios();
// $avenidaPaulista = new ApartarmentoDoisDormitorios();

// //mudar um Atributo
// $ruaVergueiro->preco = 200000;

// // Vendo caracteristicas do meu objeto 
// var_dump($avenidaPaulista);
// echo "<br>";

// //acessar os atributo do objeto
// //acessando atributos do objeto1
// echo "Apartamento Rua Vergueiro";
// echo "<br>";
// echo "Quantidade de quartos: " . $ruaVergueiro->quartos;
// echo "<br>";
// echo "Qual andar está o apartamento: " . $ruaVergueiro->andar;
// echo "<br>";
// //criar novo atributos para o objeto
// //Atributo unico para o apartamento da rua vergueiro
// $ruaVergueiro->tv = true;
// var_dump($ruaVergueiro->tv);
// echo "<br>";
// echo "<br>";

// //acessando Atributos do objeto2
// echo "Apartamento Avenida Paulista";
// echo "<br>";
// echo "Quantidade de quartos: " . $avenidaPaulista->quartos;
// echo "<br>";
// echo "Qual andar está o apartamento" . $avenidaPaulista->andar;
// echo "<br>";
// // var_dump($avenidaPaulista->tv);

// //Acessando Metodos
// $avenidaPaulista->abrigar();
// $ruaVergueiro->abrigar();
// $avenidaPaulista->get_andar();
// $ruaVergueiro->get_andar();
