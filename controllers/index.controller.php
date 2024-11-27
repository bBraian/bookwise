<?php

$pesquisa = $_REQUEST['pesquisa'] ?? "";

$db = new DB();

$livros = $db->query(
  query: "select * from livros where titulo like :filtro", 
  class: Livro::class, 
  params: ['filtro' => "%$pesquisa%"]
)->fetchAll();

view('index', [
  'livros' => $livros
]);

?>