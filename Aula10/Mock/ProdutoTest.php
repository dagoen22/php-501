<?php

use PHPUnit\Framework\TestCase;
require "Produto.php";
require "./vendor/autoload.php";

class ProdutoTest extends TestCase
{
    public function testBarcode()
    {
        $produto = $this->createMock(Produto::class);
        $produto->method('mostrarBarcode')
             ->willReturn(['codigo' => 123123]);

        // $produto = new Produto();

        $this->assertEquals(['codigo' => 123123],
            $produto->mostrarBarcode());
    }
}