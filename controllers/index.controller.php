<?php

$pesquisa = $_REQUEST['pesquisa'] ?? "";
$livros = (new DB())->livros($pesquisa);

view('index', [
  'livros' => $livros
]);

?>