<?php

class DB {

  private $db;

  public function __construct() {
    $this->db = new PDO('sqlite:database.sqlite');
  }

  public function livros($pesquisa = null) {
    $prepare = $this->db->prepare("select * from livros where titulo like :pesquisa");
    $prepare->bindValue('pesquisa', "%$pesquisa%");
    $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
    $prepare->execute();
    return $prepare->fetchAll();
  }

  public function getLivro(int $id) {
    $prepare = $this->db->prepare("select * from livros where id like :id");
    $prepare->bindValue('id', "$id");
    $prepare->setFetchMode(PDO::FETCH_CLASS, Livro::class);
    $prepare->execute();
    return $prepare->fetch();
  }
  
}

?>