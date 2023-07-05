<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Site de Escritores e Leitores - Home</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <nav>
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
        </nav>
    </header>

    <section class="banner">
        <!-- Banner ou destaque do site -->
    </section>

    <section class="content">
        <h2>Obras em Destaque</h2>
        <div class="obras-destaque">
            <?php
            // Exibir obras em destaque do banco de dados
            // Conexão com o banco de dados e consulta SQL
            $conexao = mysqli_connect("localhost", "root", "", "written");
            $query = "SELECT * FROM obras WHERE destaque = 1";
            $result = mysqli_query($conexao, $query);

            // Exibir as obras em destaque
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='obra'>";
                echo "<img src='obras/{$row['capa']}' alt='{$row['titulo']}' />";
                echo "<h3>{$row['titulo']}</h3>";
                echo "<p>{$row['descricao']}</p>";
                echo "</div>";
            }

            // Fechar conexão com o banco de dados
            mysqli_close($conexao);
            ?>
        </div>

        <h2>Novas Obras</h2>
        <div class="novas-obras">
            <?php
            // Exibir novas obras do banco de dados
            // Conexão com o banco de dados e consulta SQL
            $conexao = mysqli_connect("localhost", "usuario", "senha", "nome_do_banco");
            $query = "SELECT * FROM obras ORDER BY data_publicacao DESC LIMIT 6";
            $result = mysqli_query($conexao, $query);

            // Exibir as novas obras
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='obra'>";
                echo "<img src='obras/{$row['capa']}' alt='{$row['titulo']}' />";
                echo "<h3>{$row['titulo']}</h3>";
                echo "<p>{$row['descricao']}</p>";
                echo "</div>";
            }

            // Fechar conexão com o banco de dados
            mysqli_close($conexao);
            ?>
        </div>
    </section>

    <footer>
        <!-- Rodapé -->
    </footer>
</body>
<script src="./js/script.js"></script>
</html>