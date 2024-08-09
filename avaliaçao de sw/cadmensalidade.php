<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Mensalidade</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 5px; }
        input[type="submit"] { margin-top: 10px; padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        footer { margin-top: 20px; }
        p { color: #555; }
    </style>
</head>
<body>
    <h1>Cadastro de Mensalidade</h1>
    <form action="processa_cadmensalidade.php" method="post">
        <label for="CodMen">Código da Mensalidade:</label>
        <input type="text" id="CodMen" name="CodMen" required>
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>
        <label for="valor">Valor:</label>
        <input type="number" id="valor" name="valor" required>
        <label for="aumento">Aumento:</label>
        <input type="number" id="aumento" name="aumento" required>
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valor = $_POST['valor'];
        $aumento = $_POST['aumento'];
        $totalAumento = $valor + $aumento;
        echo "<p>Total após aumento: R$" . number_format($totalAumento, 2, ',', '.') . "</p>";
    }
    ?>

    <footer>
        <?php
        echo "<p>Desenvolvido por Brenno Senna na versão 1.1</p>";
        ?>
    </footer>
</body>
</html>