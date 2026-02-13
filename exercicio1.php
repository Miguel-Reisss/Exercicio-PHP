<?php
// Verifica se o formulário foi enviado
if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    
    // Define o cookie 'usuario_nome' para expirar em 2 dias (2 * 24 * 60 * 60 segundos)
    setcookie("usuario_nome", $nome, time() + (2 * 24 * 60 * 60));
    
    // Atualiza a página para carregar o cookie recém-criado
    header("Location: exercicio1.php");
    exit();
}

// Verifica se o usuário clicou em "Sair/Limpar" para testar novamente
if (isset($_GET['sair'])) {
    setcookie("usuario_nome", "", time() - 3600); // Expira o cookie no passado
    header("Location: exercicio1.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Cookie</title>
</head>
<body>
    <h1>Exercício 1: Armazenar Nome (Cookie)</h1>

    <?php
    // Verifica se o cookie existe
    if (isset($_COOKIE['usuario_nome'])) {
        echo "<p>Olá, <strong>" . htmlspecialchars($_COOKIE['usuario_nome']) . "</strong>! Seu nome está salvo por 2 dias.</p>";
        echo "<a href='?sair=true'>Esquecer meu nome (Testar novamente)</a>";
    } else {
    ?>
        <form method="POST" action="">
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome" required>
            <button type="submit">Salvar</button>
        </form>
    <?php
    }
    ?>
</body>
</html>