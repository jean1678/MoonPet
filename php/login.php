<?php
    session_start();
    include('conexao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }
        
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    /**mysqli_query = executa um comando dentro de um banco de dados
     * você deverá informar dois parâmetros, conexão com banco e comando sql
     */
    $query = "select nome from usuario where usuario ='{$usuario}' and senha = md5('{$senha}')"; // Ajuste para o nome correto da tabela "Cidade"
    $result = $pdo->query($query);

    /** se row >0 significa que um resultado foi encontrado */
    if($row == 1) {
        $usuario_bd = mysqli_fetch_assoc($result);
        $_SESSION['nome'] = $usuario_bd['nome'];
        header('Location: painel.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] =true;
        header('Location: index.php');
        exit();
    }
    
