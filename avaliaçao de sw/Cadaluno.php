<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="date"], input[type="email"] { width: 100%; padding: 8px; margin-top: 5px; }
        input[type="submit"] { margin-top: 10px; padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        footer { margin-top: 20px; }
        p { color: #555; }
    </style>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="processa_cadaluno.php" method="post">
        <label for="CodAluno">Código do Aluno:</label>
        <input type="text" id="CodAluno" name="CodAluno" required>
        <label for="aluno">Nome do Aluno:</label>
        <input type="text" id="aluno" name="aluno" required>
        <label for="rg">RG:</label>
        <input type="text" id="rg" name="rg" required>
        <label for="DtNascimento">Data de Nascimento:</label>
        <input type="date" id="DtNascimento" name="DtNascimento" required>
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