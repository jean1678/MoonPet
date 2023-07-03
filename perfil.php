<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="shortcut icon" href="img/favicon_io/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="css/stylePerfil.css">
  <title>AdoteSeuAnimal</title>
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

    <div class="galeria">
      <div class="perfil">
        <img src="img/hamster.jpg" alt="">
      </div>
  
      <div class="midia">
        <img src="img/hamster.jpg" alt="">
        <img src="img/hamster.jpg" alt="">
        <img src="img/hamster.jpg" alt="">
      </div>
    </div>
    

    <div class="container">

      <div class="nome">
        <p>Débora</p>
      </div>
  
      <div class="complemento">
        <p>Hamster/Fêmea</p>
      </div>
  
      <div class="info">
        <h3>Informaçõesⓘ</h3>
  
        <p>Adorável e carinhosa, Débora é uma hamster encantadora que está procurando por um novo lar amoroso. Com seu pelo macio e olhos brilhantes, ela é uma companheira perfeita para trazer alegria e diversão para qualquer família.
          Débora é uma hamster síria, também conhecida como hamster-dourado, uma das espécies mais populares e adoráveis de hamsters de estimação. Com sua personalidade amigável e natureza curiosa, ela adora explorar seu ambiente e interagir com seus cuidadores.
          Ela é uma hamster de tamanho médio, com um corpo redondo e fofo que é uma delícia de abraçar. Débora tem uma dieta simples, composta principalmente por ração específica para hamsters, frutas frescas e legumes. Além disso, ela adora roer pequenos pedaços de madeira para manter seus dentinhos saudáveis.
          </p>
      </div>
  
      <div class="doador">
        <img src="img/user.png" alt="" width="42em">
        <p>Doação feita por <a href="https://www.exemplo.com" class="link-style">Bruno Souza</a> em 05/06/2023</p>
      </div>
  
      <div class="btn">
        <a href="#">Adotar</a>
      </div>


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
    </script>
    <!--Script slider-->
  
</body>
</html>