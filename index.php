<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 06</h1>
    <hr>

<?php
require_once "src/Enums/Situacao.php"; // Enum
require_once "src/Models/Cliente.php"; // Superclasse
require_once "src/Models/PessoaFisica.php"; // subclasse
require_once "src/Models/PessoaJuridica.php"; // subclasse

$clientePF = new PessoaFisica("João Pedro", "joaopedro18231@hotmail.com", 28, "569.458.666-07");
$clientePJ = new PessoaJuridica(
"Pedro Henrique", "pedrohenrique@hotmail.com", "32.789.5555/000-1", 2022, "Corporação Tabajara");

/* código abaixo dará erro, pois Cliente é uma classe abstrata, portanto,
não podemos criar objeto a partir dela. */
// $clienteGenerico = new Cliente("Fulano", "fulano@gmail.com");
// var_dump($clienteGenerico);
?>

    <h2>relatórios</h2>

    <h3>PF</h3>
    <?=$clientePF->relatorio()?>
    
    <!-- Acessamos as opções do Enum através do getSituacao()->name -->
    <p><b>situação:</b> <?=$clientePF->getSituacao()->name?> </p>

    <h3>PJ</h3>
    <?=$clientePJ->relatorio()?>
    <p><b>situação:</b> <?=$clientePJ->getSituacao()->name?> </p>


</body>
</html>