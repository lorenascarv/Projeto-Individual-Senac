<?php

// Validar os dados enviados

if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['mensagem'])) {
  echo "Erro: Todos os campos são obrigatórios.";
  exit;
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$assunto = "Contato pelo site";

$corpoDoEmail = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nMensagem: $mensagem";

mail("lolylsc@gmail.com", $assunto, $corpoDoEmail);

?>