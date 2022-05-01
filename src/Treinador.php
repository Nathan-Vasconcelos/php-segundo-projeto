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

    public function cadastra(): void
    {
        $nomeArquivo = "Treinador\\" . $this->recuperaNome() . ".txt";

        $conteudo = "{$this->recuperaNome()}\n{$this->recuperaCpf()}\n{$this->recuperaPeso()}\n{$this->recuperaAltura()}\n{$this->recuperaSalario()}";

        file_put_contents($nomeArquivo, $conteudo);
        $nomeTreinador = $this->recuperaNome() . "\n";
        file_put_contents('treinador\\nome_treinadores.txt', $nomeTreinador, FILE_APPEND);
    }

}
