<?php

echo $_SESSION['nome'];
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleDoacao.css">
    <link rel="shortcut icon" href="img/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>MoonPetATT</title>
</head>
<body>

<!--Inicio Botâo de subir pro inicio-->
<a href="#inicio"><button class="subir"><img src="https://cdn.pixabay.com/photo/2016/09/05/10/50/app-1646212_1280.png"></button></a>
    <!--Fim Botâo de subir pro inicio-->

    <!--Header Inicio-->
    <header id="inicio">

        <!--Inicio Nav-Bar-->
        <nav class="menu">
            <!--Inicio Menu hamburguer-->
            <input type="checkbox" class="menu-faketrigger" id="menu">

            <div class="menu-lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!--Fim Menu hamburguer-->

            <!--Inicio Links Menu-->
            <ul>
                <li><a href="adocao.php">Adote</a></li>
                <li><a href="doacao.php">Doe</a></li>
                <li><button type="submit" onclick="handlePopup(false)">Fale Conosco</button></li>
                <li><a href="facaParte.php">Cadastre-se</a></li>
                <li><a href="login.php" target="_self">Login</a></li>
            </ul>
            <!--Fim Links Menu-->
        </nav>
        <!--Fim Nav-Bar-->

        <!--Titulo da Pagina-->
        <h1 id="titulo" class="titulo">MoonPet</h1>
        <!--Fim Titulo da Pagina-->
    </header>
    <!--Header Fim-->

    
    <main>

    <div class="max-width">
        <div class="imageContainer">
            <img src="img/add-image.png" alt="Selecione uma imagem" id="imgPhoto" height="300">
        </div>
    </div>

   
    

<div class="container23">
    <table>
    <form action="php/cadAdocao.php" method="POST" enctype="multipart/form-data">
    <input type="file" id="flImage" name="flImage" accept="image/*">
        <div class="formulários">
            <label for= "nome">Nome ou Apelido:</label>
            <input type="text" id="nome"required placeholder="Nome ou Apelido" name="nome" required>
        </div>

        <div class="formulários">
            <label for="CPF/CNPJ">Raça:</label>
            <select id="raca" name="raca">
                <option class="td" value="" disabled="disabled" selected="selected">Raça</option>
                <option value="">Cachorro</option>
                <option value="">Gato</option>
                <option value="">Hamster</option>
                <option value="">Coelho</option>
                <option value="">Furão</option>
            </select>
        </div>

        

        <div class="formulários">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="" disabled="disabled" selected="selected">Sexo</option>
                <option value="">fêmea</option>
                <option value="">Macho</option>
            </select>
        </div>

        <label for="CPF/CNPJ">Cidade:</label>
            <select id="cidade" name="cidade">
                <option class="td" value="" disabled="disabled" selected="selected">Cidade</option>
                    
                    <?php
                    include "php/conexao.php";

                    $result = $conn->query("select * from cidade");
                    while($row = $result->fetch_object())
                    {


    echo'
    <option value="'.$row->idCidade.'">'.$row->cidade.'</option>
    ';
}
?>
            </select>
        </div>

        <div class="formulários">
            <label for="informacoes">Informações Adicionais:</label>
            <textarea required placeholder="Digite aqui as informações do animal que deseja doar." name="informacoes" id="informacoes" cols="30" rows="10" required></textarea> 
            
        </div>
        
    </table>

        <div class="formPT2">
        <input type="checkbox" name="cbx" id="cbxTermos">
        <span>Para continuar é preciso que concorde com os <a href="">termos de doação</a></span>
        <br>
        <br>
        <button type="submit" class="btnDoar">Doar</button>
        </div>  
        </form>     
        
</div>
    
    </main>

    <!--Inicio Footer-->
    <footer>
        <div class="container2">
            <p>&copy; 2023 Moon Pet. Todos os direitos reservados.</p>
            <ul class="footer-links">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Serviços</a></li>
                <li><button class="popup-btn" type="submit" onclick="handlePopup(false)">Contato</button></li>
            </ul>
        </div>
    </footer>
    <!--Fim Footer-->

    <!--Contato-->
    <section class="Contato popup opened" id="popup">
        <button type="submit" class="close-popup-btn" onclick="handlePopup(true)">Fechar</button>
        <h2>Contato</h2>
        <form action="https://api.staticforms.xyz/submit" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit" class="btn-form" >Enviar</button>

            <input type="hidden" name="accessKey" value="042be0d3-84fa-4ae8-aaed-2434cda72cac">
            <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/obrigado.html">
        </form>
    </section>
    <!--Contato-->

    <!--Script slider-->
    <script src="js/slide.js"></script>
    <script>
        const popup = document.getElementById('popup');

        function handlePopup(open){
            popup.classList[open ? 'add' : 'remove'] ('opened');
        }
        
        function toggleCheckboxOnMobile() {
        var checkbox = document.getElementById('menu');
        var menu = document.querySelector('#main');

        document.addEventListener('touchstart', function(event) {

            if (typeof event.touches !== menu) { 
                checkbox.checked = false;
            }
            else{
                checkbox.checked = true;
            }
    });
    }

    document.addEventListener('DOMContentLoaded', function() {
        toggleCheckboxOnMobile();
    });

    //destop
        const items = document.querySelectorAll(".item");
        items.forEach((item) => {
        item.addEventListener("click",() =>{
            if(item.classList.contains("show")){
                item.classList.remove("show");
            }
            else{
                item.classList.add("show");
            }
            //items.forEach((item) => item.classList.remove("show"));
            
        });
    });

       //fazendo upload imagem
        let photo = document.getElementById('imgPhoto');
        let file = document.getElementById('flImage');

        photo.addEventListener('click', () => {
            file.click();
        });
    </script>

    //fazendo preview

    <script>
    let img = document.getElementById('imgPhoto');
    let input = document.getElementById('flImage');

    input.onchange = (e) => {
        if(input.files[0])
        img.src = URL.createObjectURL(input.files[0]);
    };
    </script>

    <!--Script slider-->



</body>
</html>