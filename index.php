<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" type="text/css" href="./css/sobre.css">
</head>
<body>
  <header>
    <div class="menu-toggle">
      <div class="hamburger"></div>
    </div>
    <div class="logo">
      <img src="./img/logo.png" alt="Logo">
    </div>
    <nav>
      <ul class="menu">
        <li><a href="#">Menu 1</a>
          <ul class="submenu">
            <li><a href="#">Submenu 1</a></li>
            <li><a href="#">Submenu 2</a></li>
            <li><a href="#">Submenu 3</a></li>
          </ul>
        </li>
        <li><a href="#">Menu 2</a>
          <ul class="submenu">
            <li><a href="#">Submenu 4</a></li>
            <li><a href="#">Submenu 5</a></li>
            <li><a href="#">Submenu 6</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="search-bar">
      <input type="text" placeholder="Pesquisar">
      <button>Buscar</button>
    </div>
    <div class="login-languages">
      <div class="login">
        <a href="#">Iniciar sessão</a>
      </div>
      <div class="languages">
        <a href="#">Idiomas</a>
        <ul class="sublanguages">
          <li><a href="#">Sub-idioma 1</a></li>
          <li><a href="#">Sub-idioma 2</a></li>
          <li><a href="#">Sub-idioma 3</a></li>
        </ul>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="about-banner">
      <h1>Sobre o Site</h1>
    </div>
    
    <div class="about-description">
      <h2>Seja bem-vindo ao nosso site!</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, nulla sit amet fringilla pharetra, mi mauris commodo neque, at tristique turpis mi id nunc.</p>
    </div>
    
    <div class="about-buttons">
      <a href="cadastro.php" class="btn btn-cadastro">Cadastro</a>
      <a href="login.php" class="btn btn-login">Login</a>
    </div>
  </div>
<center>
  <div class="about-features">
            <h2>Recursos do nosso site</h2>
            <ul>
                <li>
                    <div class="feature-icon">
                        <img src="upload-icon.png" alt="Ícone de upload">
                    </div>
                    <div class="feature-description">
                        <h3>Compartilhe suas obras</h3>
                        <p>Publique suas próprias histórias, poesias e romances para que outros leitores possam apreciar.</p>
                    </div>
                </li>
                <li>
                    <div class="feature-icon">
                        <img src="discover-icon.png" alt="Ícone de descoberta">
                    </div>
                    <div class="feature-description">
                        <h3>Descubra novas histórias</h3>
                        <p>Explore uma vasta coleção de obras em diferentes gêneros e encontre seu próximo livro favorito.</p>
                    </div>
                </li>
                <li>
                    <div class="feature-icon">
                        <img src="community-icon.png" alt="Ícone de comunidade">
                    </div>
                    <div class="feature-description">
                        <h3>Conecte-se com outros escritores e leitores</h3>
                        <p>Participe de grupos de discussão, compartilhe feedback e faça amizade com pessoas que compartilham sua paixão pela escrita.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</center>
  <script src="./js/script.js"></script>
</body>
</html>
