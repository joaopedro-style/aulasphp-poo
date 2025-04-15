<?php
class Cliente
{
    private string $nome;
    private int $idade;
    private string $email;

    // Método Construtor (Sempre é executado automaticamente ao criar objeto)
    public function __construct(string $nome, int $idade, string $email)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setEmail($email);
    }

    public function verificarIdade(): string {
        if ( $this->idade < 18 ) {
            return "menor de idade";
        } elseif($this->idade < 60) {
            return "adulto";
        } else {
            return "idoso";
        }
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        if ($idade < 0){
            throw new InvalidArgumentException("Idade não pode ser negativa");
        }

        $this->idade = $idade;
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

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
