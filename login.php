<?php
session_start(); // Inicia a sessão

// Verifica se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de login e senha foram preenchidos
    if (!empty($_POST["login"]) && !empty($_POST["password"])) {
        $login = $_POST["login"];
        $senha = $_POST["password"];

        // Verifica se o login e a senha são válidos (realize a validação conforme sua lógica de negócio)
        if ($login == "usuario" && $senha == "senha123") {
            // Login bem-sucedido, armazene o login na sessão
            $_SESSION["login"] = $login;
            // Redireciona para a página de perfil ou qualquer outra página desejada
            header("Location: area_usuario.php");
            exit();
        } else {
            // Login inválido, exiba uma mensagem de erro ou realize outra ação
            echo "Login inválido";
        }
    } else {
        // Campos de login e senha não preenchidos, exiba uma mensagem de erro ou realize outra ação
        echo "Por favor, preencha todos os campos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Site de Escritores e Leitores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST" action="">
        <input type="hidden" name="acao" value="login">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>