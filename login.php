<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="shortcut icon" href="img/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Login</title>
</head>
<body>
        <!--Header Inicio-->
        <header id="inicio">

            <!--Inicio Nav-Bar-->
            <nav class="menu">
                <!--Inicio Menu hamburguer-->
                <input type="checkbox" class="menu-faketrigger">
    
                <div class="menu-lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--Fim Menu hamburguer-->
    
                <!--Inicio Links Menu-->
                <ul>
                    <li><a href="index.php" target="_self">Voltar</a></li>
                </ul>
                <!--Fim Links Menu-->
            </nav>
            <!--Fim Nav-Bar-->
    
            <!--Titulo da Pagina-->
            <h1 id="titulo" class="titulo">MoonPet</h1>
            <!--Fim Titulo da Pagina-->
        </header>
        <!--Header Fim-->
    <div class="main-login">
        <div class="left-login">
            <h1>Bem vindo! <br></h1>
            <img class="left-login-img" src="img/pets.svg">
        </div>

        <form action="php/login.php" method="POST">
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                    <button class="btn-login" type="submit">Login</button>
                </div>
                 <div class="textfield">
                </div>
            </div>
        </div>
        </form>
    </div>

    <footer>
            <div class="container">
            <p>&copy; 2023 Moon Pet. Todos os direitos reservados.</p>
            <ul class="footer-links">
                <li><a href="index.php" target="_self">Página Inicial</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Serviços</a></li>
                <p class="contato">MoonPet@Gmail.com</p>
            </ul>
            </div>
      </footer>

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