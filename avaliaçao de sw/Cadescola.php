<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Escola</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="email"] { width: 100%; padding: 8px; margin-top: 5px; }
        input[type="submit"] { margin-top: 10px; padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        footer { margin-top: 20px; }
        p { color: #555; }
    </style>
</head>
<body>
    <h1>Cadastro de Escola</h1>
    <form action="processa_cadescola.php" method="post">
        <label for="CodEscola">Código da Escola:</label>
        <input type="text" id="CodEscola" name="CodEscola" required>
        <label for="NomeEscola">Nome da Escola:</label>
        <input type="text" id="NomeEscola" name="NomeEscola" required>
        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required>
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Cadastrar">
    </form>
    <footer>
        <?php
        echo "<p>Desenvolvido por Brenno Senna na versão 1.1</p>";
        ?>
    </footer>
</body>
</html>