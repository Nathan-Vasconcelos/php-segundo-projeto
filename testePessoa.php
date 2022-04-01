<?php

use raiz\Nathan\Pessoa;
use raiz\Nathan\Avaliacao;
use raiz\Nathan\CPF;
use Raiz\Nathan\Cliente;
use Raiz\Nathan\Treinador;

require_once 'src/Pessoa.php';
require_once 'src/Avaliacao.php';
require_once 'src/CPF.php';
require_once 'src/Cliente.php';
require_once 'src/Treinador.php';

//$Jeferson = new Cliente('Jeferson', new CPF('123.456.789-10'), 70.5, 1.7, 'Treinador Marcelo', '123', 'musculação');
$umTreinador = new Treinador('Marcelo', new CPF('123.456.789-11'), 80.5, 1.72, 2000.0);
$Jeferson = new Cliente('Jeferson', new CPF('123.456.789-10'), 70.5, 1.7, $umTreinador, '123', 'musculação');

echo 'DADOS do cliente:' . PHP_EOL;
echo "NOME: {$Jeferson->recuperaNome()}" . PHP_EOL;
echo "CPF: {$Jeferson->recuperaCpf()}" . PHP_EOL;
echo "PESO: {$Jeferson->recuperaPeso()}" . PHP_EOL;
echo "ALTURA: {$Jeferson->recuperaAltura()}" . PHP_EOL;

echo "-----------------------------------------------------" . PHP_EOL;
$imcDoJeferson = new Avaliacao($Jeferson->recuperaPeso(), $Jeferson->recuperaAltura());

echo $imcDoJeferson->recuperaPeso() . PHP_EOL;
echo $imcDoJeferson->recuperaAltura() . PHP_EOL;
echo "IMC do cliente: {$imcDoJeferson->recuperaImc()}" . PHP_EOL;
echo "Resultado do IMC: {$imcDoJeferson->recuperaResultado()}" . PHP_EOL;

echo "Treinador do cliente: {$Jeferson->recuperaTreinador()->recuperaNome()}". PHP_EOL;
echo "Matrícula do cliente: {$Jeferson->recuperaMatricula()}" . PHP_EOL;
echo "Pacote do cliente: {$Jeferson->recuperaPacote()}" . PHP_EOL;

echo "-----------------------------------------------------" . PHP_EOL;
echo "DADOS do treinador" . PHP_EOL;
echo "NOME do treinador: {$umTreinador->recuperaNome()}" . PHP_EOL;
echo "CPF do treinador: {$umTreinador->recuperaCpf()}" . PHP_EOL;
echo "PESO do treinador: {$umTreinador->recuperaPeso()}" . PHP_EOL;
echo "ALTURA do treinador: {$umTreinador->recuperaAltura()}" . PHP_EOL;
echo "Salario do treinador R$:{$umTreinador->recuperaSalario()}";
