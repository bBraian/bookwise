<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
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