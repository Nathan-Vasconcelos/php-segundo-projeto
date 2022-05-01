<?php

namespace Raiz\Nathan;

class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        //$this->cpf = $cpf;
        if ($this->validaCpf($cpf)) {
            $this->cpf = $cpf;
        } else {
            $this->cpf = "INVALIDO";
        }
    }

    public function recuperaNumero(): string
    {
        return $this->cpf;
    }

    public function validaCpf($cpf): int
    {
        return preg_match('/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/', $cpf, $resultado);
    }
}
