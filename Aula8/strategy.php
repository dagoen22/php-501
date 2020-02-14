<?php

interface ISaida
{
    public function carrega(array $dados);
}

class ArraySerializadoSaida implements ISaida
{
    public function carrega(array $dados): string
    {
        return serialize($dados);
    }
}

class JsonSaida implements ISaida
{
    public function carrega(array $dados): string
    {
        return json_encode($dados);
    }
}

class ArraySaida implements ISaida
{
    public function carrega(array $dados): array
    {
        return $dados;
    }
}

class XmlSaida implements ISaida
{
    public function carrega(array $dados): string
    {
        // return xml($dados);
        return '';
    }
}

class ClientApp
{
    private $saida;

    public function setSaida(ISaida $tipoSaida)
    {
        $this->saida = $tipoSaida;
    }
    public function carregaSaida(array $dados)
    {
        return $this->saida->carrega($dados);
    }
}

$meusDados = [
    'nome' => 'Daniel Silva',
    'Email' => 'daniel.silva@4linux.com.br',
    'idade' => 19
];

$cliente = new ClientApp;

$cliente->setSaida(new ArraySaida);
print_r($cliente->carregaSaida($meusDados));





