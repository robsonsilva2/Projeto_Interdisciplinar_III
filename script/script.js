function comprarCarro(nomeCarro) {
    const usuario = localStorage.getItem("usuarioLogado");

    if ($usuario) {
        alert(`✅ Compra realizada com sucesso!
Carro: ${nomeCarro}
Cliente: ${usuario}`);
    } else {
        alert("⚠ Você precisa estar logado para comprar!");
        window.location.href = "login.php";
    }
}