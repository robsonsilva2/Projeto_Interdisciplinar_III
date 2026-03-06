<?php
    require "conexao.php";
    session_start();

    if (!isset($_SESSION['cliente'])) {
        echo "<script>
            alert('Você precisa estar logado para comprar!');
            window.location.href = 'login.php';
          </script>";
    exit;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $modelo = $_POST['modelo'] ?? null;
        $cliente_id = $_SESSION['cliente']['id'] ?? null;

        if ($modelo) {

            // 1️⃣ Buscar o ID do veículo pelo modelo
            $stmt = $pdo->prepare("SELECT id, preco FROM veiculos WHERE modelo = ?");
            $stmt->execute([$modelo]);
            $veiculo = $stmt->fetch();

            if (!$veiculo) {
                $_SESSION['mensagem'] = "Veiculo não encontrado";
                header("Location: index.php");
                exit;
            }

            $veiculo_id = $veiculo['id'];
            $valor_total = $veiculo['preco'];
            $data = date("Y-m-d H:i:s");

            // 2️⃣ Inserir na tabela compras
            $stmtInsert = $pdo->prepare("
                INSERT INTO compras (data, valor_total, veiculo_id, cliente_id)
                VALUES (?, ?, ?, ?)
            ");

            $sucesso = $stmtInsert->execute([
                $data,
                $valor_total,
                $veiculo_id,
                $cliente_id
            ]);

            if ($sucesso) {
                $_SESSION['mensagem'] = "Nossa loja entrará em contato com você , reserva feita com sucesso!";
            } else {
                $_SESSION['mensagem'] = "Erro ao registrar compra.";
            }

        } else {
            $_SESSION['mensagem'] = "Dados inválidos.";
        }

        header("Location: index.php");
        exit;
    }
?>