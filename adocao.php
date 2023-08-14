<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleAdocao.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
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
    <h2>Adote!</h2>
    <p class="texto1">Promovemos encontros entre pessoas e pets a espera de um lar por meio dos nossos eventos de adoção. Sabemos que quando doamos tempo para cuidar de alguém, fortalecemos nossos laços. Temos aqui muitos animais a espera de um lar. Esperamos que você encontre o seu.</p>

<div class="box">

    <select id="regiao" name="regiao">
        <option value="" disabled="disabled" selected="selected">Região</option>
        <option value="">Baixada Santista</option>
    </select>

    <select id="cidade" name="Cidade">
        <option value="" disabled="disabled" selected="selected">Cidade</option>
    

     <?php 
              include "php/conexao.php";

              $query = "SELECT * FROM Cidade"; // Ajuste para o nome correto da tabela "Cidade"
              $result = $pdo->query($query);

              while ($row = $result->fetch(PDO::FETCH_OBJ)) { // Corrigir o loop para iterar sobre os resultados
                  echo '<option value="' . $row->idCidade . '">' . $row->cidade . '</option>';
              }
        ?>

    </select>

    <select id="tipo" name="Tipo">
        <option value="" disabled="disabled" selected="selected">Tipo</option>

        <?php 
                    include "php/conexao.php";

                    $query = "SELECT * FROM espécie"; // Ajuste para o nome correto da tabela "Cidade"
                    $result = $pdo->query($query);

                    while ($row = $result->fetch(PDO::FETCH_OBJ)) { // Corrigir o loop para iterar sobre os resultados
                        echo '<option value="' . $row->idespecie . '">' . $row->especie . '</option>';
                    }
        ?>
    </select>

    </div>


    <div class="btn">
            <a href="#">Buscar</a>
        </div>


    <div class="container2" >

    <?php
        include "php/conexao.php";

        $query = "SELECT * FROM doacao"; // Ajuste para o nome correto da tabela "doacao"
        $result = $pdo->query($query);

        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            echo '
            <div class="cardAnimal">
                <a href="perfil.php?doacao='.$row->nome.'">
                <div class="cardFoto">
                        <img src="pets/'.$row->imagem.'" alt="">                
                    </div>
                    <div class="cardNome">               
                        <p>' . $row->nome . '</p>
                        <div class="complemento">
                        <h3>Santos-SP</h3>
                        </div>               
                    </div>
                </a>
            </div>
            ';
        }
    ?>


    </div>

    </main>

    <!--Inicio Footer-->
    <footer>
        <div class="container">
            <p>&copy; 2023 Moon Pet. Todos os direitos reservados.</p>
            <ul class="footer-links">
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Serviços</a></li>
            </ul>
            <p class="contato">MoonPet@Gmail.com</p>
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
    </script>
    <!--Script slider-->

</body>
</html>