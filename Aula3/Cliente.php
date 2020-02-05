<?php
    //Como fazer herança de classe
    //Classe final, não pode ser herdada
    final class Cliente extends Pessoa
    {
        /**
         * Essa classe cria um cliente
         */
        public function __construct(
            string $nome,
            string $sobrenome,
            string $sexo,
            string $dataNascimento,
            float $qtdDinheiro,
            string $naturalidade = "Brasileiro"
        ) {
            parent::__construct($nome, $sobrenome, $sexo, $dataNascimento, $naturalidade);
            $this->qtdDinheiro = $qtdDinheiro;
        }
        public function comprar()
        {
            echo "Estou gastando muito dinheiro";
        }
        public function apresentar()
        {
            /**
             * Essa Função mostra uma breve apresentação do cliente
             */
            $retorno = parent::apresentar();
            return "Eu sou o cliente " . $retorno;
        }
    }
