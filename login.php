<?php
    session_start();
    require_once "conexao.php";

    $cliente = "";
    $email = "";
    $mensagem = "";

    try{

        if($_SERVER["REQUEST_METHOD"] == 'POST') {

            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            $sql = "SELECT * FROM clientes WHERE email = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email]);
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($cliente && password_verify($senha, $cliente['senha'])) {

                $_SESSION['cliente'] = [
                    'id' => $cliente['id'],
                    'nome' => $cliente['nome'],
                    'email' => $cliente['email'],
                ];

                header("Location: index.php");
                exit;
            } else {
                $mensagem = "Usuário ou senha incorretos!";
            }
        }
    } catch (Exception $e) {
        echo "<p> Erro na conexão:". $e->getMessage(). " </p>";
    }
    
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ico/carrinho.png" type="image/x-icon">
    <title>Entrar com sua conta </title>
</head>
<body>
    <section id="contato">
      <h2>Entre com sua conta</h2>
      <form class="form" method="post" action="login.php">

        <?php if ($mensagem):?>
            <p> <?= htmlspecialchars($mensagem) ?> </p>
        <?php endif; ?>
        <br>
        <div class="input-group">
                <span>📧</span>
                <input type="email" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-group">
                <span>🔒</span>
                <input type="password" name="senha" placeholder="Senha" required>
            </div>

            <button type="submit">Entrar</button>
      </form>
    </section>
</body>
</html>
