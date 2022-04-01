<?php

namespace Raiz\Nathan;

class Treinador extends Pessoa
{
    private $salario;
    private$cliente;

    public function __construct(string $nome, CPF $cpf, float $peso, float $altura, float $salario)
    {
        parent::__construct($nome, $cpf, $peso, $altura);
        $this->salario = $salario;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }
}
