<?php
// Verifica se o usuário está logado
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Área do Usuário</title>
    <link rel="stylesheet" href="./css/area_usuario.css">
</head>
<body>
    <header>
        <h2>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php">Sair</a>
    </header>

    <div class="container">
        <h3>Seu conteúdo exclusivo:</h3>
        <p>Aqui você pode adicionar e gerenciar suas obras, capítulos e interagir com outros usuários.</p>
    </div>

    <footer>
        <p>Site de Escritores</p>
    </footer>
</body>
</html>