<?php

use raiz\Nathan\Pessoa;
use raiz\Nathan\CPF;
use Raiz\Nathan\Treinador;
use Raiz\Nathan\Cliente;
use Raiz\Nathan\PuxarCadastro;
use raiz\Nathan\Avaliacao;

require_once 'src/Pessoa.php';
require_once 'src/CPF.php';
require_once 'src/Treinador.php';
require_once 'src/Cliente.php';
require_once 'src/PuxarCadastro.php';
require_once 'src/Avaliacao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Clientes cadastrados</title>
</head>
<body>
    <header>
        <h1>Clientes cadastrados</h1>
    </header>

    <div class="menu-principal">
        <table>
            <thead>
                <tr>
                    <th>NOME</th><th>CPF</th><th>IMC</th><th>MATRÍCULA</th><th>TREINADOR</th>
                </tr>
            </thead>

            <?php

                $cadastro = new PuxarCadastro('cliente');
                $clientes = $cadastro->recuperaCadastros();
                
                foreach ($clientes as $cliente) {

                    $arquivo = $cadastro->recuperaArquivo($cliente);


                    $cadastroTreinador = new PuxarCadastro('treinador');
                    $nomeArquivo = "{$cadastroTreinador->recuperaPreFixo()}" . trim($arquivo[5]) . ".txt";

                    $dadosTreinador = file($nomeArquivo);
                    $umTreinador = new Treinador(trim($dadosTreinador[0]), new CPF(trim($dadosTreinador[1])), trim($dadosTreinador[2]), trim($dadosTreinador[3]), trim($dadosTreinador[4]));

                    
                    $umCliente = new Cliente(trim($arquivo[0]), new CPF(trim($arquivo[1])), trim($arquivo[2]), trim($arquivo[3]), $umTreinador, trim($arquivo[4]), 'completo');

                    $imcCliente = new Avaliacao($umCliente->recuperaPeso(), $umCliente->recuperaAltura());

                    echo "<tr><td>{$umCliente->recuperaNome()}</td> <td>{$umCliente->recuperaCpf()}</td> <td>{$imcCliente->recuperaResultado()}</td> <td>{$umCliente->recuperaMatricula()}</td> <td>{$umCliente->recuperaTreinador()}</td></tr>";
                }

            ?>

        </table>
        <button><a href="index.html">VOLTAR</a></button>
        <form action="/calcularImc.php" method = 'post'><input type="submit" value="CALCULAR IMC" name="imc" class="botao"></form>
        