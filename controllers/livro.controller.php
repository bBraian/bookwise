<?php

$livro = (new DB)->getLivro($_REQUEST['id']);

view('livro', [
  'livro' => $livro
]);

?>