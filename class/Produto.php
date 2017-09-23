<?php

  class Produto
  {

    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;
    public $usado;

    function precoComDesconto($desconto = 0.1){
      if($desconto > 0 && $desconto <=0.5){
          $this->preco = $this->preco - ($this->preco * $desconto);;
      }
      return $this->preco;
    }

  }

?>
