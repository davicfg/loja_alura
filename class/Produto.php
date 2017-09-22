<?php

  class Produto
  {

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;

    function precoComDesconto($valor = 0.1){
      return $this->preco - ($this->preco * $valor);;

    }

  }

?>
