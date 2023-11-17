<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["Menssagem"];

    $arquivo_log = 'log.txt';
    $log_data = "Nome: $nome - E-mail: $email - Mensagem: $mensagem\n";


    file_put_contents($arquivo_log, $log_data, FILE_APPEND);

    header("Location: index.html");
    exit();
}
?>