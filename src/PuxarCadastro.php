<?php

namespace Raiz\Nathan;

use Raiz\Nathan\Cliente;
use raiz\Nathan\CPF;
use Raiz\Nathan\Treinador;

require_once 'src/CPF.php';
require_once 'src/Cliente.php';
require_once 'src/Treinador.php';

class PuxarCadastro
{
    protected $caminhoArquivo;
    protected $preFixo;

    public function __construct($pessoa)
    {
        $caminhoArquivo = $this->recuperaCaminhoArquivo($pessoa);
        $this->caminhoArquivo = $caminhoArquivo;

        $preFixo = $this->definePreFixo($this->caminhoArquivo);
        $this->preFixo = $preFixo;
    }

    public function recuperaCadastros(): array
    {
        return $clientes = file($this->caminhoArquivo);
    }

    public function recuperaArquivo($cliente): array
    {
        $nomeArquivo = "cliente\\" . trim($cliente) . '.txt';
        $arquivo = file($nomeArquivo);
        return $arquivo;
    }

    private function definePreFixo($caminhoArquivo)
    {
        $caminhoQuebrado = explode("\\", $caminhoArquivo);
        $preFixo = $caminhoQuebrado[0] . "\\";
        return $preFixo;
    }

    private function recuperaCaminhoArquivo($pessoa)
    {
        if ($pessoa === 'cliente') {
            $caminhoArquivo = 'cliente\\nome_clientes.txt';
        } else {
            $caminhoArquivo = 'treinador\\nome_treinadores.txt';
        }
        return $caminhoArquivo;
    }

    public function recuperaPreFixo()
    {
        return $this->preFixo;
    }
}
