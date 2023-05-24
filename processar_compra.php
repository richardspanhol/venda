<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o produto foi selecionado
  if (isset($_POST["produto"])) {
    $produtoSelecionado = $_POST["produto"];

    // Processa a compra do produto selecionado
    // Aqui você pode adicionar a lógica de compra específica, como calcular o preço, atualizar o estoque, etc.

    // Exemplo: exibe uma mensagem de confirmação
    echo "Produto selecionado: " . $produtoSelecionado . "<br>";
    echo "Compra realizada com sucesso!";
  } else {
    echo "Nenhum produto selecionado.";
  }
}
?>
