<?php
    session_start();
    require 'conexao.php';

    // Só executa se vier do formulário
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = $_POST['senha'];

        try {
            $sql = "INSERT INTO clientes (nome, telefone, email,senha)
                    VALUES (:nome, :telefone, :email, :senha)";

            $stmt = $pdo->prepare($sql);

            $stmt->execute([
                ':nome' => $nome,
                ':telefone' => $telefone,
                ':email' => $email,
                ':senha' => password_hash($senha, PASSWORD_DEFAULT)
            ]);

            header("Location: login.php");
            exit;

        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Faça seu Login</title>
<link rel="shortcut icon" href="ico/carrinho.png" type="image/x-icon">
<link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="login-container">
    <h2>Faça seu Login</h2>
    
    <form class="form" action="#" method="post">

        <div class="input-group">
            <span>👤</span>
            <input type="text" name="nome" placeholder="Nome completo" required>
        </div>

        <div class="input-group">
            <span>📱</span>
            <input type="tel" name="telefone" placeholder="Número de telefone" required>
        </div>

        <div class="input-group">
            <span>📧</span>
            <input type="email" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-group">
            <span>🔒</span>
            <input type="password" name="senha" placeholder="Senha" required>
        </div>

        <button type="submit">Cadastrar !</button>

        <p class="login-link">
          Já tem uma conta?
        <a href="login.php">Entrar</a>
        </p>
        
    </form>

</div>

</body>
</html>
