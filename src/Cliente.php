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

    public function recuperaTreinador(): string
    {
        return $this->treinador->recuperaNome();
    }

    public function recuperaMatricula(): string
    {
        return $this->matricula;
    }

    public function recuperaPacote(): string
    {
        return $this->pacote;
    }

    public function cadastra(): void
    {
        $nomeArquivo = "cliente\\" . $this->recuperaNome() . ".txt";

        $conteudo = "{$this->recuperaNome()}\n{$this->recuperaCpf()}\n{$this->recuperaPeso()}\n{$this->recuperaAltura()}\n{$this->recuperaMatricula()}\n{$this->recuperaTreinador()}";

        file_put_contents($nomeArquivo, $conteudo);
        $nomeCliente = $this->recuperaNome() . "\n";

        file_put_contents('cliente\\nome_clientes.txt', $nomeCliente, FILE_APPEND);
        
    }

    public function recuperaCadastro()
    {
        $clientes = file('cliente\\nome_clientes.txt');
        $nomeArquivo = "cliente\\" . trim($cliente) . '.txt';
        $arquivo = file($nomeArquivo);
        return $arquivo;
    }

    public function recuperaNomeCadastrado()
    {
        $nomeArquivo = "cliente\\" . trim($cliente) . '.txt';
        $arquivo = file($nomeArquivo);
        return $arquivo[0];
    }

    /*public function recuperaNomeArquivo($cliente)
    {
        $nomeArquivo = "cliente\\" . trim($cliente) . '.txt';
        return $nomeArquivo;
    }*/
}
