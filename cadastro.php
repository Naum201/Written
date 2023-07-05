<?php
// Inclua o arquivo de conexão com o banco de dados
require_once 'database.php';

// Obter os valores do formulário de cadastro
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Inserir os dados na tabela de usuários
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro - Opções</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/cadastro.css">
  <style>
   
  </style>
</head>
<body>
  <div class="container">
    <h1>Cadastre-se</h1>
      
    <h2>Cadastro de Usuário</h2>
    <form action="cadastro.php" method="POST">
        <label for="username">Nome:</label>
        <input type="text" name="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
    
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
  </div>
</body>
</html>