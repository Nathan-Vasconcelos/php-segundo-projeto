<?php

namespace Raiz\Nathan;

class Avaliacao
{
    private float $peso;
    private float $altura;

    public function __construct(float $peso, float $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function recuperaPeso(): float
    {
        return $this->peso;
    }

    public function recuperaAltura(): float
    {
        return $this->altura;
    }

    public function recuperaImc(): float
    {
        $imc = $this->peso / $this->altura ** 2;
        return $imc;
    }

    public function recuperaResultado(): string
    {
        $imc = $this->recuperaImc();
        if ($imc < 20) {
            return "abaixo do peso";
        } elseif ($imc <= 24.9) {
            return "peso normal";
        } elseif ($imc <= 29.9) {
            return "obesidade leve";
        } elseif ($imc <= 39.9) {
            return "obesidade moderada";
        }

        return "obesidade mórbida";
    }
}
