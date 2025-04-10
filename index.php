<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>

<?php
// Carregando/importando a classe
require_once "src/Cliente.php";

// Criando objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

// Atribuindo valores para os atributos
$clienteA->nome = "João Pedro";
$clienteA->idade = 28;
$clienteA->email = "joaopedro18231@hotmail.com";


$clienteB->nome = "Pedro";
$clienteB->idade = "20";
$clienteB->email = "pedro@hotmail.com";
?>

<h2>Acessando/lendo os dados dos objetos</h2>

<h3>ClienteA</h3>
<div>
    <?=$clienteA->exibirDados()?>
</div>

<ul>
    <li><b>Idade:</b> <?=$clienteA->idade?> </li>
    <li><b>E-mail:</b> <?=$clienteA->email?> </li>
</ul>

<h3>ClienteB</h3>
<div>
    <?=$clienteB->exibirDados()?>
</div>

<ul>
    <li><b>Idade:</b> <?=$clienteB->idade?> </li>
    <li><b>E-mail:</b> <?=$clienteB->email?> </li>
</ul>

<h2>Testes de acesso aos recursos da classe através do objeto</h2>

<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>