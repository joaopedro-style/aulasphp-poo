<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>

<?php
require_once "src/Cliente.php"; // Superclasse
require_once "src/PessoaFisica.php"; // subclasse

$clientePF = new PessoaFisica("João Pedro", "joaopedro18231@hotmail.com");
?>

<pre><?=var_dump($clientePF)?></pre>



</body>
</html>