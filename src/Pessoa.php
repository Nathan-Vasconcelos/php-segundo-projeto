<?php

namespace Raiz\Nathan;

class Pessoa
{
    protected string $nome;
    protected CPF $cpf;
    protected float $peso;
    protected float $altura;

    public function __construct(string $nome, CPF $cpf, float $peso, float $altura)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaPeso(): float
    {
        return $this->peso;
    }

    public function recuperaAltura(): float
    {
        return $this->altura;
    }
}
