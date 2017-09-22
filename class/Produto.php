<?php

  class Produto
  {

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;
    private $descontoPadrao = 0.1;

    function precoComDesconto($valor = $this->descontoPadrao){
      $this->preco -= $this->preco $valor;
      return $this->preco;

    }

  }

?>
