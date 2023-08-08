<?php 
    header('Content-Type: application/json');

    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $informacoes = $_POST['informacoes'];
    $imagem = $_FILES['flImage'];
    $cidade = $_POST['cidade'];

    $dir = "../pets/";

    $imagem['name'] = $nome.".jpg";
    
    if (move_uploaded_file($imagem["tmp_name"], "$dir".$imagem['name'])){
       echo $message = "Arquivos enviados com sucesso!";
    } else {
       echo $message = "Erro, o arquivo não pode ser enviado.";
    }

    include "conexao.php";

    $stmt = $pdo->prepare('INSERT INTO doacao (nome, sexo, raca, informacoes, imagem, idCidade) VALUES (:nome, :sexo, :raca, :informacoes, :imagem, :cidade)');
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':sexo', $sexo);
    $stmt->bindValue(':raca', $raca);
    $stmt->bindValue(':informacoes', $informacoes);
    $stmt->bindValue(':imagem', $imagem['name']);
    $stmt->bindValue(':cidade', $cidade);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $response = 'Pet cadastrado com sucesso';
    } else {
        $response = 'Erro ao cadastrar pet';
    }

    echo json_encode($response);
?>
