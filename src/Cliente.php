<?php
class Cliente
{
    // Atributos (características da classe)
    public string $nome;
    public int $idade;
    public string $email;

    // Métodos (comportamentos da Classe)
    public function exibirDados(): void {}
    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
