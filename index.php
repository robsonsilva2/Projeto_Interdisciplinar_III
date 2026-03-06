<?php
    require "conexao.php";

    session_start();
    $usuarioLogado = isset($_SESSION['cliente']);
    $mensagem = $_SESSION['mensagem'] ?? null;
    unset($_SESSION['mensagem']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="ico/carrinho.png" type="image/x-icon">
    <title>AutoSuper</title>
</head>

<body>

    <header>
        <div class="container header-container">
            <h1 class="logo">
                <span class="auto">Auto</span>
                <span class="super">Super</span>
            </h1>

            <nav>
                <ul>
                    <li><a href="#novos">Carros Novos</a></li>
                    <li><a href="#semi-novos">Semi-novos</a></li>
                    <li><a href="cadastro.php">Login</a></li>
                    <li>
                        <?php if ($usuarioLogado): ?>
                            <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: white" title="logout"></i></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Potência. Luxo. Exclusividade.</h1>
            <p>Os melhores supercarros do mundo em um só lugar.</p>
            <a href="#novos" class="btn-primary">Ver Carros</a>
        </div>
    </section>

    <section class="section" id="novos">
        <div class="container">
            <h2>Carros Novos</h2>

            <div class="car-grid">

                <div class="car-card">
                    <img src="img/aventador ultimae.png" alt="Aventador Ultimae">
                    <div class="info">
                        <h3>Lamborghini Aventador Ultimae</h3>
                        <p> Ano 2025 (0 Km) <p>
                        <p>R$ 9.800.000  Fipe  (2026)</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="lamborghini aventador ultimae">
                            <input type="hidden" name="preco" value="9800000">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/cente c.png" alt="Lamborghini Centenário">
                    <div class="info">
                        <h3>Lamborghini Centenário</h3>
                        <p>*Veículo de importação independente (0 Km)<p>
                        <p>US$ 6.000.000</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="lamborghini centenário">
                            <input type="hidden" name="preco" value="6000.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/f vermelha.png" alt="Ferrari Portofino M">
                    <div class="info">
                        <h3>Ferrari Portofino M</h3>
                        <p>Ano 2023 (0 Km)
                        <p>R$ 2.999.999</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="ferrari portofino m">
                            <input type="hidden" name="preco" value="2999.99">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/p laranja.png" alt="Porsche 911 GTS">
                    <div class="info">
                        <h3>Porsche 911 GTS</h3>
                        <p>Ano 2026 (0 Km)<p>
                        <p>R$ 1.299.000</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="porsche 911 gts">
                            <input type="hidden" name="preco" value="1299.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/p preta.png" alt="Porsche 911 Turbo S">
                    <div class="info">
                        <h3>Porsche 911 Turbo S</h3>
                        <p>Ano 2026 (0 Km)<p>
                        <p>R$ 1.350.000</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="porsche 911 turbo s">
                            <input type="hidden" name="preco" value="1350.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/p verde.png" alt="Porsche 911 ST manual">
                    <div class="info">
                        <h3>Porsche 911 ST manual</h3>
                         <p>Ano 2026 (0 Km)<p>
                        <p>R$ 1.500.000</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="porsche 911 st manual">
                            <input type="hidden" name="preco" value="1500.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section" id="semi-novos">
        <div class="container">
            <h2>Carros Semi-novos</h2>

            <div class="car-grid">

                <div class="car-card">
                    <img src="img/camaro amarelo.png" alt="Camaro SS">
                    <div class="info">
                        <h3>Chevrolet Camaro SS </h3>
                         <p>Ano 2012 (25.000 Km)<p>
                        <p>R$ 500.000</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="chevrolet camaro ss">
                            <input type="hidden" name="preco" value="500.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/celta.png" alt="Celta Prata ">
                    <div class="info">
                        <h3>Chevrolet Celta 1.4 vhc-e</h3>
                        <p>ar-condicionado,vidros elétricos,direção hidráulica , esse é extra de verdade !<p>
                        <p>100.000.000 US$</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="chevrolet celta 1.4 vhc-e">
                            <input type="hidden" name="preco" value="100000.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

                <div class="car-card">
                    <img src="img/palio do milton.png" alt="Palio">
                    <div class="info">
                        <h3>Fiat Palio 1.4</h3>
                        <p>Ano 2017,(107.500 Km) um carro para quem gosta de contar histórias.</p>
                        <p>R$ 30.000</p>
                        <form action="comprar.php" method="POST">
                            <input type="hidden" name="modelo" value="fiat palio 1.4">
                            <input type="hidden" name="preco" value="30000.00">
                            <button type="submit">Comprar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2026 AutoSuper. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        function comprarCarro() {

            const usuarioLogado = <?php echo $usuarioLogado ? 'true' : 'false'; ?>;

            if (usuarioLogado) {
                alert("Nossa loja entrará em contato com você , reserva feita com sucesso!");
            } else {
                alert("Você precisa estar logado para comprar!");
                window.location.href = "login.php";
            }
        }
    </script>

    <?php if ($mensagem): ?>
        <script>
            alert("<?= $mensagem ?>");
        </script>
    <?php endif; ?>

</body>

</html>