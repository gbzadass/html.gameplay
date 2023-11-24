<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["Menssagem"];

    $caminhoArquivo = "dados_formulario.txt";

    $arquivo = fopen($caminhoArquivo, "a");

    fwrite($arquivo, "Nome: " . $nome . "\n");
    fwrite($arquivo, "E-mail: " . $email . "\n");
    fwrite($arquivo, "Mensagem: " . $mensagem . "\n\n");
    fclose($arquivo);
    header("Location: formulario.html");
    exit();
}
?>