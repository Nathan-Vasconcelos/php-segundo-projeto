<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar treinador</title>
</head>
<body>
    <header>
        <h1>Cadastrar treinador</h1>
    </header>
    <div class="menu-principal">
        <form action="/cadastro_treinador.php" method="post" class="form-treinador">
            <label for="nome">NOME: <input type="text" id="nome" name="nome" required></label>
                <label for="cpf">CPF: <input type="text" id="cpf" name="cpf" placeholder="123.456.789-10" required></label>
                <label for="peso">PESO: <input type="text" id="peso" name="peso" placeholder="70.5" required></label>
                <label for="altura">ALTURA <input type="text" id="altura" name="altura" placeholder="1.8" required></label>
                <label for="salario">SALARIO R$: <input type="text" id="salario" name="salario" placeholder="1200.89" required></label>
                <input type="submit" value="CADASTRAR" name="cadastrar" class="botao">
                <button><a href="index.html">VOLTAR</a></button>
        </form>
    </div>

    <?php

        use raiz\Nathan\Pessoa;
        use raiz\Nathan\CPF;
        use Raiz\Nathan\Treinador;
        require_once 'src/Pessoa.php';
        require_once 'src/CPF.php';
        require_once 'src/Treinador.php';

        if (isset($_POST['cadastrar'])) {
            $umTreinador = new Treinador($_POST['nome'], new CPF($_POST['cpf']), $_POST['peso'], $_POST['altura'], $_POST['salario']);
            $umTreinador->cadastra();
        }
    ?>
    
</body>
</html>