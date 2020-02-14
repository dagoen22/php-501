<?php

class SmartPhone
{
    public function ligar()
    {
        echo "piririm piririm piririm, alguém ligou pra mim";
    }
}
class SmartWatch
{
    public function verHora()
    {
        echo "Agora são 22:00";
    }
}
class Pc
{
    public function ligar()
    {
        echo "Ligando...";
    }
}

class Xiaomi
{
    public static function criar(string $produto)
    {
        // if(ucfirst($produto) == 'SmartPhone')
        // {
        //     return new SmartPhone;
        // }
        // if(ucfirst($produto) == 'SmartWatch')
        // {
        //     return new SmartWatch;
        // }
        // if(ucfirst($produto) == 'Pc')
        // {
        //     return new Pc;
        // }

        $classe = ucfirst($produto);
        return new $classe;
    }
}

$smartphone = Xiaomi::criar('SmartPhone');
$smartwatch = Xiaomi::criar('SmartWatch');
$pc = Xiaomi::criar('pc');

$pc->ligar();
$smartwatch->verHora();
$smartphone->ligar();