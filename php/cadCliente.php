<?php

    session_start();
    include("conexao.php");

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf =  $_POST['cpf'];
    $telefone =  $_POST['telefone'];

    $sql = "select cadastro as total from email where email = '$email'";
    $result = $pdo->query( $sql );
    $row = $result->fetchAll( PDO::FETCH_ASSOC );
    
    if($row['$total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header('Location: cadastro.php');
        exit;
    }

    $stmt = $pdo->prepare('INSERT INTO cadastro (nome, senha, email, cpf, telefone) VALUES (:nome, :senha, :email, :cpf, :telefone, NOW())');
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':senha', $senha);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':cpf', $cpf);
    $stmt->bindValue(':telefone', $telefone);
    $stmt->execute();

    if($conexao->query($pdo) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }
    
    $conexao->close();
    
    header('Location: cadastro.php');
    exit;

    echo json_encode($response);

    /* <?php
    session_start();
    include("conexao.php");
    
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
    
    $sql = "select count(*) as total from usuario where usuario = '$usuario'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if($row['total'] == 1) {
        $_SESSION['usuario_existe'] = true;
        header('Location: cadastro.php');
        exit;
    }
    
    $sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";
    
    if($conexao->query($sql) === TRUE) {
        $_SESSION['status_cadastro'] = true;
    }
    
    $conexao->close();
    
    header('Location: cadastro.php');
    exit;
    ?> */