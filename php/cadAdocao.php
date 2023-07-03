<?php 

    include 'conexao.php';

    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $informacoes = $_POST['informacoes'];
    $imagem = $_FILES['flImage'];
    $cidade = $_POST['cidade'];



        $dir = "../pets/";

        $imagem['name'] = $nome.".jpg";
        $imgname= $imagem['name'] ;
        if (move_uploaded_file($imagem["tmp_name"], "$dir".$imagem["name"])){

        echo "Arquivos enviados com sucesso!";
        }
        else{
            echo "Erro, o arquivo n&atilde;o pode ser enviado.";
        }



    $sql = ("INSERT INTO doacao (nome,sexo,raca,informacoes,imagem,idCidade) VALUES ('$nome', '$sexo', '$raca', '$informacoes','$imgname','$cidade')");
        
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_affected_rows($conn);

    if($rows > 0){
        //echo "<script>alert('Pet cadastrado com sucesso!');window.location.href='http://localhost/barbearia/cadastrar.php'</script>";
    }
    else{
        echo "ERRO AO CADASTRAR BARBEIRO";
    }

?>    