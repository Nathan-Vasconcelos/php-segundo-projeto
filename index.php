<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header class="cabecalho-footer">
        <h1>Academia XGYM</h1>
    </header>
    <div class="caixa-treinador">
        <legend><h2>Cadastrar treinador</h2></legend>
        <form action="/dados.php" method="post">
            <label for="nome">NOME: <input type="text" id="nome" name="nome" required></label>
            <label for="cpf">CPF: <input type="text" id="cpf" name="cpf" placeholder="123.456.789-10" required></label>
            <label for="peso">PESO: <input type="text" id="peso" name="peso" placeholder="70.5" required></label>
            <label for="altura">ALTURA <input type="text" id="altura" name="altura" placeholder="1.8" required></label>
            <label for="salario">SALARIO R$: <input type="text" id="salario" name="salario" placeholder="1200.89" required></label>
        <!--<input type="submit" value="CADASTRAR" name="cadastrar">-->
    </div>

    <div class="caixa-cliente">
        <legend><h2>Cadastrar cliente</h2></legend>
        
            <label for="nome-cliente">NOME: <input type="text" id="nome-cliente" name="nome-cliente" required></label>
            <label for="cpf-cliente">CPF: <input type="text" id="cpf-cliente" name="cpf-cliente" placeholder="123.456.789-10" required></label>
            <label for="peso-cliente">PESO: <input type="text" id="peso-cliente" name="peso-cliente" placeholder="70.5-cliente" required></label>
            <label for="altura-cliente">ALTURA <input type="text" id="altura-cliente" name="altura-cliente" placeholder="1.8" required></label>
            <label for="matricula">MATRÍCULA: </label>
            <input type="text" id="matricula" name="matricula" placeholder="1234" required>
            <label for="pacote">PACOTE: </label>
            <!--<input type="text" id="pacote" name="pacote" required>-->
            <select name="pacote" id="pacote">
                <option value="musculacao">Musculação</option>
                <option value="completo">Completo</option>
            </select>
            <!--<input type="submit" value="CADASTRAR" name="cadastrar-cliente">-->
            <input type="submit" value="CADASTRAR" name="cadastrar">
        </form>
    </div>

</body>
</html>