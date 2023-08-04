<?php

    header('Content-Type: application/json');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    include "conexao.php";

    $stmt = $pdo->prepare('INSERT INTO cadastro (nome, senha, email, cpf, telefone) VALUES (:nome, :senha, :email, :cpf, :telefone)');
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':senha', $senha);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':cpf', $cpf);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $response = 'Usuario cadastrado com sucesso';
    } else {
        $response = 'Erro ao cadastrar Usuario';
    }

    echo json_encode($response);

?>    