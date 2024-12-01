<?php

$pesquisa = $_REQUEST['pesquisa'] ?? "";

$livros = $DB->query(
  query: "select * from livros where titulo like :filtro", 
  class: Livro::class, 
  params: ['filtro' => "%$pesquisa%"]
)->fetchAll();

view('index', [
  'livros' => $livros
]);

?>