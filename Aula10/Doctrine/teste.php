<?php

require_once "bootstrap.php";

use Curso\Loja\Entidades\{Produto,Carrinho};

//Inserindo dados usando o doctrine
// $produtos = [
//     ['nome' => 'TV', 'preco' => 5000],
//     ['nome' => 'Sound Bar', 'preco' => 650],
//     ['nome' => 'Suporte TV', 'preco' => 125 ]
// ];

// foreach($produtos as $prod) {
//     $produto = new Produto();
//     $produto->setNome($prod['nome']);
//     $produto->setPreco($prod['preco']);

//     $entityManager->persist($produto);
// }
// $entityManager->flush();

$produtoRepository = $entityManager
                    ->getRepository('Curso\Loja\Entidades\Produto');

$carrinhoRepository = $entityManager
->getRepository('Curso\Loja\Entidades\Carrinho');

// Visualizando dados do DB
// $produto = $produtoRepository->find(1);
// $produto = $produtoRepository->findAll();
$produto = $produtoRepository->findBy(['nome'=>'Sound Bar']);

foreach ($produto as $prod){
    echo "Id: {$prod->getId()}\n";
    echo "Id: {$prod->getNome()}\n";
    echo "Id: {$prod->getPreco()}\n";
    echo "<br> \n";
}

//Alterando dados da tabela
// $produto = $produtoRepository->find(2);

// $produto->setPreco(1300.00);
// $entityManager->persist($produto);
// $entityManager->flush();

//Removendo dados da tabela
// $produto = $produtoRepository->find(2);

// $entityManager->remove($produto);
// $entityManager->flush();

// Trabalhando com tabelas relacionadas
// $produto = $produtoRepository->findAll();

// $carrinho = new Carrinho;

// $carrinho->setDataVenda(new \DateTime());

// foreach ($produto as $prod)
// {
//     $carrinho->addItem($prod,2);
// }
// $entityManager->persist($carrinho);
// $entityManager->flush();


$carrinho = $carrinhoRepository->findAll();

foreach ($carrinho as $prod){
    echo "Id: {$prod->getId()}\n";
    echo "Id: {$prod->getTotal()}\n";
    echo "<br> \n";
}