<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Include em PHP</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>FUNÇÃo INCLUDE E REQUIRE EM PHP</h3>";
    echo "<hr>";
    $meses = array (
        1 => "Janeiro",
        2 => "fevereiro",
        3 => "marco",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"

    );
    $hoje = getdate(); // A função getdate, obtem a data do sistema operacional.
    $dias = $hoje["mday"]; // Obtem o dia, referente a data do sistema operacional.
    $mes = $hoje["mon"];
    $nomemes = $meses[$mes]; // Obtem o dia, referente a data do sistema operacional.
    $ano = $hoje["year"]; // Obtem o dia, referente a data do sistema operacional.
    echo $dias;
    echo $mes;
    echo $ano;
    echo "O mes atual é " . $nomemes
    
    ?>

</body>
</html>