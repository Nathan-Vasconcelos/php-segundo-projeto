<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Academia XGYM</h1>
    <h2>Cadastrar treinador</h2>
    <form method="post">
        <label for="nome">NOME: <input type="text" id="nome" name="nome"></label>
        <label for="cpf">CPF: <input type="text" id="cpf" name="cpf" placeholder="123.456.789-10"></label>
        <label for="peso">PESO: <input type="text" id="peso" name="peso" placeholder="70.5"></label>
        <label for="altura">ALTURA <input type="text" id="altura" name="altura" placeholder="1.8"></label>
        <label for="salario">SALARIO R$: <input type="text" id="salario" name="salario" placeholder="1200.89"></label>

        <legend>Cadastrar cliente</legend>
    
        <label for="nome-cliente">NOME: <input type="text" id="nome-cliente" name="nome-cliente"></label>
        <label for="cpf-cliente">CPF: <input type="text" id="cpf-cliente" name="cpf-cliente" placeholder="123.456.789-10"></label>
        <label for="peso-cliente">PESO: <input type="text" id="peso-cliente" name="peso-cliente" placeholder="70.5-cliente"></label>
        <label for="altura-cliente">ALTURA <input type="text" id="altura-cliente" name="altura-cliente" placeholder="1.8"></label>
        <label for="matricula">MATRÍCULA: <input type="text" id="matricula" name="matricula" placeholder="1234"></label>
        <label for="pacote">PACOTE: <input type="text" id="pacote" name="pacote"></label>
        <input type="submit" value="CADASTRAR" name="cadastrar">
    </form>

    <?php

        use raiz\Nathan\Pessoa;
        use raiz\Nathan\CPF;
        use Raiz\Nathan\Treinador;
        use Raiz\Nathan\Cliente;
        use Raiz\Nathan\Avaliacao;

        require_once 'src/Pessoa.php';
        require_once 'src/Cliente.php';
        require_once 'src/Treinador.php';
        require_once 'src/CPF.php';
        require_once 'src/Avaliacao.php';
        

        if (isset($_POST['cadastrar'])) {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $salario = $_POST['salario'];

            $umTreinador = new Treinador($nome, new CPF($cpf), $peso, $altura, $salario);
            echo "<h2>DADOS do treinador</h2>";
            echo "<p>NOME do treinador: {$umTreinador->recuperaNome()}</p>";
            echo "<p>CPF do treinador: {$umTreinador->recuperaCpf()}</p>";
            echo "<p>PESO do treinador: {$umTreinador->recuperaPeso()}</p>";
            echo "<p>ALTURA do treinador: {$umTreinador->recuperaAltura()}";
            echo "<p>Salario do treinador R$:{$umTreinador->recuperaSalario()}</p>";
    
            $nomeCliente = $_POST['nome-cliente'];
            $cpfCliente = $_POST['cpf-cliente'];
            $pesoCliente = $_POST['peso-cliente'];
            $alturaCliente = $_POST['altura-cliente'];

            $matriculaCliente = $_POST['matricula'];
            $pacote = $_POST['pacote'];
    
            $umCliente = new Cliente($nomeCliente , new CPF($cpfCliente), $pesoCliente, $alturaCliente, $umTreinador, $matriculaCliente, $pacote);
            $imcDoCliente = new Avaliacao($umCliente->recuperaPeso(), $umCliente->recuperaAltura());

            echo "<h2>DADOS do cliente</h2>";
            echo "<p>NOME do cliente: {$umCliente->recuperaNome()}</p>";
            echo "<p>CPF do cliente: {$umCliente->recuperaCpf()}</p>";
            echo "<p>PESO do cliente: {$umCliente->recuperaPeso()}</p>";
            echo "<p>ALTURA do cliente: {$umCliente->recuperaAltura()}";
            echo "<p>Matrícula do cliente:{$umCliente->recuperaMatricula()}</p>";
            echo "<p>Pacote do cliente:{$umCliente->recuperaPacote()}</p>";
            echo "<p>IMC do cliente: {$imcDoCliente->recuperaImc()}</p>";
            echo "<p>Resultado do IMC: {$imcDoCliente->recuperaResultado()}<p>";
            
        }
    ?>

</body>
</html>