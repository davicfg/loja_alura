<?php

  class Livro extends Produto {

    private $isbn;

    function __construct($isbn)
    {
      $this->isbn = $isbn;
    }


  public function getIsbn() {
    return $this->isbn;
  }

  public function setIsbn($isbn) {
    $this->isbn = $isbn;
  }

  }
 ?>
