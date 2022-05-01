<?php

use raiz\Nathan\Pessoa;
use raiz\Nathan\CPF;
use Raiz\Nathan\Treinador;
require_once 'src/Pessoa.php';
require_once 'src/CPF.php';
require_once 'src/Treinador.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Treinadores cadastrados</title>
</head>
<body>
    <header>
        <h1>Treinadores cadastrados</h1>
    </header>

    <div class="menu-principal">
        <table>
            <thead>
                <tr>
                    <th>NOME</th><th>CPF</th><th>PESO</th><th>ALTURA</th><th>SALÁRIO</th>
                </tr>
            </thead>
            <?php

                $treinadores = file('treinador\\nome_treinadores.txt');

                foreach ($treinadores as $treinador) {
                    $nomeArquivo = "treinador\\" . trim($treinador) . '.txt';
                    $arquivo = file($nomeArquivo);

                    echo "<tr><td>$treinador</td> <td>{$arquivo[1]}</td> <td>{$arquivo[2]}</td> <td>{$arquivo[3]}</td> <td>{$arquivo[4]}</td></tr>";
                }

            ?>
        </table>
        <button><a href="index.html">VOLTAR</a></button>
    </div>

</body>
</html>