<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $validacoes = [];

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $senha = $_POST['password'];

  if(strlen($nome) == 0) {
    $validacoes []= "Nome eh obrigatorio";
  }
  if(strlen($email) == 0) {
    $validacoes []= "Email eh obrigatorio";
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $validacoes []= "Email invalido";
  }
  if(strlen($senha) == 0) {
    $validacoes []= "Senha eh obrigatorio";
  }
  if(strlen($senha) != 0 && strlen($senha) < 6 || strlen($senha) > 20) {
    $validacoes []= "Senha deve ter entre 6 a 20 caracteres";
  }

  if(sizeof($validacoes) > 0) {
    $_SESSION['validacoes'] = $validacoes;
    header("Location: /login?action=register");
    exit;
  }

  $DB->query(
    query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
    params: [
      'nome' => $_POST['name'],
      'email' => $_POST['email'],
      'senha' => $_POST['password'],
    ]
  );
}

header('location: /login?mensagem=Registrado com sucesso!');
exit();

?>