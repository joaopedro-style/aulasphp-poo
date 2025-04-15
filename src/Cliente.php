<?php
class Cliente
{
    private string $nome;
    private string $email;

    // Método Construtor (Sempre é executado automaticamente ao criar objeto)
    public function __construct(string $nome, int $idade, string $email)
    {
        $this->setNome($nome);
        $this->setEmail($email);
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            throw new InvalidArgumentException("E-mail inválido!");
        }

        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
