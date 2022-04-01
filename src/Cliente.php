<?php

namespace Raiz\Nathan;

class Cliente extends Pessoa
{
    //classe cliente
    protected $treinador;
    private $matricula;
    private $pacote;

    public function __construct(string $nome, CPF $cpf, float $peso, float $altura,Treinador $treinador, string $matricula, string $pacote)
    {
        parent::__construct($nome, $cpf, $peso, $altura);
        $this->treinador = $treinador;
        $this->matricula = $matricula;
        $this->pacote = $pacote;
    }

    public function recuperaTreinador(): Treinador
    {
        return $this->treinador;
    }

    public function recuperaMatricula(): string
    {
        return $this->matricula;
    }

    public function recuperaPacote(): string
    {
        return $this->pacote;
    }
}