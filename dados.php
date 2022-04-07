<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Dados Treinador</title>
</head>
<body>
    <header>
        <h1>Cadastro realizado com sucesso</h1>
    </header>

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
        $umTreinador = new Treinador($_POST['nome'], new CPF($_POST['cpf']), $_POST['peso'], $_POST['altura'], $_POST['salario']);
        $cliente = new Cliente($_POST['nome-cliente'], new CPF($_POST['cpf-cliente']), $_POST['peso-cliente'], $_POST['altura-cliente'], $umTreinador, $_POST['matricula'], $_POST['pacote']);
        $imcCliente = new Avaliacao($cliente->recuperaPeso(), $cliente->recuperaAltura());
        $imcTreinador = new Avaliacao($umTreinador->recuperaPeso(), $umTreinador->recuperaAltura());

    ?>
    
    <div class="caixa-treinador">
        <h2>Dados do treinador</h2>
        <p>NOME: <?php echo $_POST['nome'] ?></p>
        <p>CPF: <?php echo $_POST['cpf'] ?></p>
        <p>PESO: <?php echo $_POST['peso'] ?></p>
        <p>ALTURA: <?php echo $_POST['altura'] ?></p>
        <p>SALÁRIO R$: <?php echo $_POST['salario'] ?></p>
        <p>IMC: <?php echo $imcTreinador->recuperaImc() ?>. <?php echo $imcTreinador->recuperaResultado() ?>.</p>
    </div>

    <div class="caixa-cliente">
        <h2>Dados do cliente</h2>
        <p>NOME: <?php echo $_POST['nome-cliente'] ?></p>
        <p>CPF: <?php echo $_POST['cpf-cliente'] ?></p>
        <p>PESO: <?php echo $_POST['peso-cliente'] ?></p>
        <p>ALTURA: <?php echo $_POST['altura-cliente'] ?></p>
        <p>MATRÍCULA: <?php echo $_POST['matricula'] ?></p>
        <p>PACOTE: <?php echo $_POST['pacote'] ?></p>
        <p>IMC: <?php echo $imcCliente->recuperaImc() ?>. <?php echo $imcCliente->recuperaResultado() ?>.</p>
    </div>

</body>
</html>