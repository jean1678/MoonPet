<?php 

    include 'conexao.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];


    $sql = ("INSERT INTO cadastro (nome,senha,email,cpf,telefone) VALUES ('$nome', '$senha', '$email', '$cpf', '$telefone')");
        
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if($rows > 0){
        echo "<script>alert('Cliente cadastrado com sucesso!');window.location.href='http://localhost/moonpetBack/doacao.php'</script>";
    }
    else{
        echo "ERRO AO CADASTRAR BARBEIRO";
    }

?>    