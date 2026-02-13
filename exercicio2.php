<?php
// Inicia a sessão. Isso deve ser SEMPRE a primeira coisa no código PHP.
session_start();

// Verifica se a variável de sessão 'contador' já existe
if (isset($_SESSION['contador'])) {
    // Se existe, incrementa +1
    $_SESSION['contador']++;
} else {
    // Se não existe (primeiro acesso), inicia com 1
    $_SESSION['contador'] = 1;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2 - Session</title>
</head>
<body>
    <h1>Exercício 2: Contador de Acessos (Session)</h1>

    <p>Você acessou esta página <strong><?php echo $_SESSION['contador']; ?></strong> vezes nesta sessão.</p>

    <p><em>Atualize a página (F5) para aumentar o contador.</em></p>
    <p><em>Feche o navegador e abra novamente para zerar o contador.</em></p>
</body>
</html>