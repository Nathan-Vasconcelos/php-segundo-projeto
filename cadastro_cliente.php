<?php
    use raiz\Nathan\Pessoa;
    use raiz\Nathan\CPF;
    use Raiz\Nathan\Treinador;
    use Raiz\Nathan\Cliente;

    require_once 'src/Pessoa.php';
    require_once 'src/CPF.php';
    require_once 'src/Treinador.php';
    require_once 'src/Cliente.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar cliente</title>
</head>
<body>
    <header>
        <h1>Cadastrar cliente</h1>
    </header>
    <div class="menu-principal">
        <form  method="post">
            <label for="nome-cliente">NOME: <input type="text" id="nome-cliente" name="nome-cliente" required></label>
                <label for="cpf-cliente">CPF: <input type="text" id="cpf-cliente" name="cpf-cliente" placeholder="123.456.789-10" required></label>
                <label for="peso-cliente">PESO: <input type="text" id="peso-cliente" name="peso-cliente" placeholder="70.5-cliente" required></label>
                <label for="altura-cliente">ALTURA <input type="text" id="altura-cliente" name="altura-cliente" placeholder="1.8" required></label>
                <label for="matricula">MATRÍCULA: </label>
                <input type="text" id="matricula" name="matricula" placeholder="1234" required>
                <label for="pacote">PACOTE: </label>
                <select name="pacote" id="pacote">
                    <option value="musculacao">Musculação</option>
                    <option value="completo">Completo</option>
                </select>
                <?php

                    $treinadores = file('treinador\\nome_treinadores.txt');
                ?>
                <label for="treinador">TREINADOR: </label>
                <select name="treinador" id="treinador">
                    <?php
                        foreach ($treinadores as $treinador) {
                            echo "<option value='$treinador'>{$treinador}</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="CADASTRAR" name="cadastrar" class="botao">
                <button><a href="index.html">VOLTAR</a></button>
        </form>
    </div>
    
    <?php

        if (isset($_POST['cadastrar'])) {
            $nomeArquivo = "treinador\\" . trim($_POST['treinador']) . ".txt";
            $dadosTreinador = file($nomeArquivo);
            $umTreinador = new Treinador(trim($dadosTreinador[0]), new CPF(trim($dadosTreinador[1])), trim($dadosTreinador[2]), trim($dadosTreinador[3]), trim($dadosTreinador[4]));

            //CADASTRAR O CLIENTE
            $umCliente = new Cliente($_POST['nome-cliente'], new CPF($_POST['cpf-cliente']), $_POST['peso-cliente'], $_POST['altura-cliente'], $umTreinador, $_POST['matricula'], $_POST['pacote']);
            $umCliente->cadastra();
        }
    ?>
</body>
</html>