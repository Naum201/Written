<?php
// ...

// Ação de logout
if (isset($_GET['acao']) && $_GET['acao'] === 'logout') {
    session_destroy(); // Destroi a sessão
    // Redirecionar para a página de login ou página inicial
    header("Location: login.php");
    exit();
}
?>
