<?php 

function dd(...$dump) {
  echo '<pre>';
  var_dump($dump);
  echo '</pre>';
  die();
}

function abort($code) {
  http_response_code($code);
  view($code);
  die();
}

function view($view) {
  require "views/template/app.php";
}

?>