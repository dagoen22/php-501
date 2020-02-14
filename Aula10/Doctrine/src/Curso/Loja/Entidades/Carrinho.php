<?php

namespace Curso\Loja\Entidades;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="carrinho")
 */

class Carrinho
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;

    /** @Column(type="datetime") */
    protected $dataVenda;

    /** @Column(type="decimal", precision=10, scale=2) */
    private $total = 0.0;

    /** @OneToMany(targetEntity="CarrinhoItem", mappedBy="carrinho", cascade={"persist"}) */
    private $itens;

    public function __construct()
    {
        $this->itens = new ArrayCollection;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setDataVenda(\DateTime $dataVenda)
    {
        $this->dataVenda = $dataVenda;
    }
    public function addItem(Produto $produto, int $quantidade)
    {
        $item = new CarrinhoItem;
        $item->setProduto($produto, $quantidade);
        $item->setCarrinho($this);

        $this->itens->add($item);
        $this->setTotal();
    }

    private function setTotal()
    {
        $this->total = 0.0;

        foreach ($this->itens as $item){
            $this->total += $item->getTotal();
        }
    }
    public function getTotal() : float
    {
        return $this->total;
    }
    public function getItens()
    {
        return $this->itens;
    }

}
