<?php

require "MinhaExcecao.php";

class TesteException
{
    public function mensagem(string $msg) : string
    {
        if (empty($msg)){
            throw new MinhaExcecao('Parâmetro mensagem é obrigatorio');
        }
        return $msg;
    }

}

$mensagem = new TesteException('oi');
try{
    echo $mensagem->mensagem('asdas');
}catch (MinhaExcecao $e){
    echo "Deu ruim na classe TesteException";
}catch(TypeError $e){
    echo "Você digitou o tipo errado";
}
catch(Exception $e){
    echo "Deu ruim nisso aki: " . $e;
}




