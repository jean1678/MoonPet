<?php
/** */
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/moonpetBack/";
    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once('conexao.php');

    $n = $_POST['nome'];
    $s = $_POST['senha'];
   

    $sql = "SELECT * from  where nome = '$n' and senha = '$s'";

    /**mysqli_query = executa um comando dentro de um banco de dados
     * você deverá informar dois parâmetros, conexão com banco e comando sql
     */
    $result = mysqli_query($conn, $sql);
    /*mysqli_num_rows = conta a quantidade de linhas em uma variável*/ 
    $row = mysqli_num_rows($result);
    /** se row >0 significa que um resultado foi encontrado */
    if($row > 0){
        /**mysqli_fetch_assoc = cria um array(vetor) associativo com os nomes das colunas
         * do banco de dados e traz apenas um resultado por vez
         */
        while($row2 = mysqli_fetch_assoc($result)){
            $nome = $row2['nome'];
            $id = $row2['id'];
            $_SESSION['nome'] = $nome;
            $_SESSION['id'] = $id;
           
        }
    header('Location: ../dashboardsBarbeiro.php');
   }
   else{
    echo "<script>alert('Você não tem acesso!');window.location.href='http://localhost/barbearia_43/logar.php';</script>";
}
    


