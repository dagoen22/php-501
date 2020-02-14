<?php

namespace Curso\Loja\Entidades;

/**
 * @Entity @Table(name="carrinho_item")
 */
class CarrinhoItem
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;

    /**
     * @ManyToOne(targetEntity="Carrinho", inversedBy="itens")
     */
    protected $carrinho;
    /**
     * @ManyToOne(targetEntity="Produto")
     */
    protected $produto;

    /** @Column(type="integer") */
    protected $quantidade = 0;
    
    /** @Column(type="decimal", precision=10, scale=2) */
    protected $total = 0.0;

    public function getId()
    {
        return $this->id;
    }
    public function setCarrinho(Carrinho $carrinho)
    {
        $this->carrinho = $carrinho;
    }
    public function getCarrinho() : ?Carrinho
    {
        return $this->carrinho;
    }
    public function setProduto(Produto $produto, int $quantidade)
    {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }
    public function getProduto() : ?Produto
    {
        return $this->produto;
    }
    public function getTotal() : float
    {
        return $this->total;
    }
}