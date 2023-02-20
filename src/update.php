<?php
//Preparação e inserção de dados no banco de dados
$id= $_POST['id_cliente'];
$cpf = $_POST['cpf_cliente'];
$nome = $_POST['nome_cliente'];
$email = $_POST['email_cliente'];
$nascimento = $_POST['data_nascimento_cliente'];

$sql = "UPDATE usuarios SET nome_cliente = :nome_cliente, cpf_cliente = :cpf_cliente, senha = :senha WHERE id = :id";
$stmt = $dsn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome_cliente', $nome);
$stmt->bindParam(':cpf', $nome);
$stmt->bindParam(':email_cliente', $email);
$stmt->bindParam(':data_nascimento_cliente', $nascimento);
// Executa o update
if ($stmt->execute()) {
  echo "Usuário atualizado com sucesso!";
} else {
  echo "Erro ao atualizar o usuário.";
}
?>